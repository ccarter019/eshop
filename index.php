<?php
require "includes/conn.php"; // Connect to mysql
require "includes/functions.php"; // Existing functions

$pageLocation = sanitizeData($_GET['gl']); // Which page user is on through URL get


?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="eCommerce shop products for sale">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Shop</title>

    <link rel="stylesheet" href="css/custom.css">
    
</head>
<body>

    <header>
        <h2>eCommerce Shop</h2>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php require "mainInclude.php"; // Main bulk of PHP data for populating login, logout, etc ?>

    </main>




<script src="js/custom.js"></script>
</body>
</html>