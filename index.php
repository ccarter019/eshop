<?php
session_start();
require "includes/conn.php"; // Connect to mysql
require "includes/functions.php"; // Existing functions

// determine which page user is on
// gl variable in URL determines users current location
if(isset($_GET['gl'])) {
    $pageUl = sanitizeData($_GET['gl']);
}

if(empty($pageUl)) {
    $pageLocation = "login"; // default to login page
}
else {
    $pageLocation = $pageUl; // Which page user is on through URL get
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

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">

    
</head>
<body>

    <header>
        <h2><a href="/"></a></h2>
        <div class="clear"></div>
    </header>
    <nav>
        <ul>
            <li><a href="/eshop/index.php">Home</a></li>
            <li><a href="/eshop/index.php?gl=login">Login</a></li>
            <li><a href="/eshop/index.php?gl=register">Register</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="clear"></div>

    <main>
        <div class="mainWrap">
            <div class="leftCol"><?php require "includes/nav.php"; ?></div>
            <div class="rightCol">
                <?php
                    if(isset($_SESSION['userId'])) {
                        echo "<div class='loggedUser'>";
                        echo "You are logged in:<br> <strong>". $_SESSION['userId']."</strong>";                    echo "<a href='/eshop/index.php?gl=logout' class='logoutLink'>Logout</a>";
                        echo "</div><div class='clear'></div>";
                    }
                    require "includes/mainInclude.php"; // Main bulk of PHP data for populating login, logout, etc
                ?>
            </div>
        </div>

    </main>
    <div class="clear"></div>

    <footer>
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        <p>PokemonAdventure.com is an unofficial site.</p>
    </footer>




<script src="js/custom.js"></script>
</body>
</html>