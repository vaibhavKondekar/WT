<?php
// search.php


include 'db.php';


$searchQuery = isset($_GET['q']) ? $_GET['q'] : '';


$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ? OR description LIKE ?");
$searchTerm = '%' . $searchQuery . '%';
$stmt->execute([$searchTerm, $searchTerm]);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoop Dreams - Search Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h1>
        <button class="menu-toggle">☰</button>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="cart.html" class="cart-link">Cart 🛒<span class="cart-icon"></span></a>
        </nav>
    </header>
    <main>
        <h2>Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
        <div class="products-container">
            <?php if (empty($products)): ?>
                <p>No results found.</p>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div class="product">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <button class="add-to-cart" data-product-id="<?php echo htmlspecialchars($product['id']); ?>" data-product-name="<?php echo htmlspecialchars($product['name']); ?>" data-price="<?php echo htmlspecialchars($product['price']); ?>">Add to Cart</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
    <footer>
        <p>Follow us on social media!</p>
        <p>
            <a href="https://facebook.com">Facebook</a> |
            <a href="https://twitter.com">Twitter</a> |
            <a href="https://instagram.com">Instagram</a>
        </p>
        <p>&copy; 2024 Scoop Dreams Ice Cream Shop</p>
    </footer>

    <script src="main.js"></script>
    <script src="form-validation.js"></script>
    <script src="cart.js"></script>
    <script src="checkout.js"></script>
    <!-- Include other JS files as needed -->
</body>
</html>
