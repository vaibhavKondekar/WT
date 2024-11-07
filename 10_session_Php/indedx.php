<?php
// Start the session
session_start();

// Check if session variables are set
if (isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['age'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $age = $_SESSION['age'];
} else {
    $username = $email = $age = null;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store data in session
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['age'] = (int)$_POST['age']; // casting to integer for age
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to avoid form resubmission
    exit();
}

// Handle session destroy (logout)
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page after logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced PHP Session Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"], a {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        input[type="submit"]:hover, a:hover {
            background-color: #0056b3;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Enhanced PHP Session Management</h2>

<?php if ($username && $email && $age): ?>
    <div class="output">
        <h3>Welcome, <?php echo $username; ?>!</h3>
        <p>Your email: <?php echo $email; ?></p>
        <p>Your age: <?php echo $age; ?></p>
        <a href="?logout=true">Logout</a>
    </div>
<?php else: ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
