document.addEventListener('DOMContentLoaded', () => {
    displayCartTotal();
    const checkoutForm = document.querySelector('#checkout-form');
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', submitCheckoutForm);
    }
});

function displayCartTotal() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0).toFixed(2);
    document.getElementById('cart-total').textContent = `Total: $${total}`;
}

function submitCheckoutForm(event) {
    event.preventDefault(); // Prevent the default form submission

    // Display the success message
    const successMessage = document.getElementById('success-message');
    successMessage.textContent = 'Checkout successful! Thank you!!';
    successMessage.style.display = 'block'; // Show the message

    // Clear the cart and update the cart count
    localStorage.setItem('cart', JSON.stringify([]));
    updateCartCount();

    // Optionally, redirect after a delay
    setTimeout(() => {
        window.location.href = 'index.html';
    }, 2000); // Redirect after 2 seconds
}

// checkout.js

document.getElementById('checkout-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Here you would typically handle the form data and send it to your server
    // For demonstration, we'll just show a success message

    // Display the success message
    const successMessage = document.getElementById('success-message');
    successMessage.textContent = 'Order placed successfully!';
    successMessage.style.display = 'block'; // Show the message

    // Optionally, you can reset the form after submission
    this.reset();
});
