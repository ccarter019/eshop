<?php

// login form
$rErrors = "";

if(!isset($_POST['pageLocLogin'])) {
    require "login_form.php";
}
elseif(isset($_POST['pageLocLogin'])) {

    $pageLocation = "login";
    if(isset($_POST['fEmail'])) {
        $rUsername = sanitizeData($_POST['fEmail']);
        $rUsername = mysqli_real_escape_string($conn, $rUsername);
    }
    if(isset($_POST['pwd'])) {
        $rPassword = sanitizeData($_POST['pwd']);
        $rPassword = mysqli_real_escape_string($conn, $rPassword);
    }
    if(empty($rUsername) || empty($rPassword)) {
        $rErrors .= "Please fill in all fields.";
    }

    if(empty($rErrors)) {
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$rUsername' LIMIT 0, 1");
        $row = mysqli_fetch_array($result);
        if(password_verify($rPassword, $row['password'])) {
            echo "<p class='formValid'>Thank you for logging in.</p>
            <div class='loading'>You are being redirected to homepage</div>";
            $_SESSION['userId'] = $row['username'];
            header( "Refresh:1; url=http://localhost/eshop/index.php", true, 303);
        } else {
            echo "<p class='formErrors'>Invalid username or password.</p>";
            require "login_form.php";
        }

    }
    else {
        echo "<p class='formErrors'>".$rErrors."</p>";
        require "login_form.php";
    }

}
?>
