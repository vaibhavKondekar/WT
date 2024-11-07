function loadProducts() {
    fetch('/api/products')
        .then(response => response.json())
        .then(products => {
            const productsContainer = document.querySelector('.products-container');

        });
}
