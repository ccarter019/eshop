<?php
require "includes/conn.php"; // Connect to mysql
require "includes/functions.php"; // Existing functions

// checking to see if URL GET method gl variable is set to determine which page user is on
// gl variable in URL determines users current location
if(isset($_GET['gl'])) {
    $pageUl = $_GET['gl'];
}

if(empty($pageUl)) {
    $pageLocation = "login"; // default to login page
}
else {
    $pageLocation = sanitizeData($pageUl); // Which page user is on through URL get
}

// connect mysql
require "includes/conn.php";

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
                <li><a href="/eshop/index.php">Home</a></li>
                <li><a href="/eshop/index.php?gl=login">Login</a></li>
                <li><a href="/eshop/index.php?gl=register">Register</a></li>
                <li><a href="#">About</a></li>
                <li class="nLogout"><a href="/index.php?gl=logout">Logout</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
    <div class="clear"></div>

    <main>

        <?php require "includes/mainInclude.php"; // Main bulk of PHP data for populating login, logout, etc ?>

    </main>




<script src="js/custom.js"></script>
</body>
</html>