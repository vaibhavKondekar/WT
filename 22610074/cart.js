document.addEventListener('DOMContentLoaded', () => {
    setupEventListeners();
    loadCartItems();
});

function setupEventListeners() {
    document.body.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('add-to-cart')) {
            const product = {
                productId: event.target.getAttribute('data-product-id'),
                productName: event.target.getAttribute('data-product-name'),
                price: event.target.getAttribute('data-price'),
                quantity: 1
            };
            addToCart(product);
        }
    });
}

function addToCart(product) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingIndex = cart.findIndex(item => item.productId === product.productId);

    if (existingIndex > -1) {
        cart[existingIndex].quantity += 1; // Increment quantity if product exists
    } else {
        cart.push(product); // Add new product to cart if it doesn't exist
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Added to cart!');
    updateCartCount();
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.querySelector('.cart-count');
    const totalQuantity = cart.reduce((total, item) => total + item.quantity, 0);

    if (cartCount) {
        cartCount.textContent = totalQuantity;
    }
}

function loadCartItems() {
    const cartItemsTableBody = document.querySelector("#cart-items tbody");
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cartItemsTableBody.innerHTML = cart.length === 0 ? `<tr><td colspan="5" style="text-align:center;">Your cart is empty.</td></tr>` : "";

    cart.forEach(item => {
        const row = cartItemsTableBody.insertRow();
        row.insertCell(0).textContent = item.productName;
        row.insertCell(1).textContent = item.quantity;
        row.insertCell(2).textContent = `$${item.price}`;
        row.insertCell(3).textContent = `$${(item.quantity * parseFloat(item.price)).toFixed(2)}`;

        const removeBtnCell = row.insertCell(4);
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.addEventListener('click', () => removeFromCart(item.productId));
        removeBtnCell.appendChild(removeButton);
    });
}

function removeFromCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.productId !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCartItems();
    updateCartCount();
}
