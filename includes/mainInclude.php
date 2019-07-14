<?php

if(!empty($pageLocation)) {

    echo "Page location set";

}

if(empty($pageLocation) || $pageLocation == "login") {
    ?>
        <div class="formWrap">
        <h5>Login</h5>
        <form method="POST">
            <label>Email:</label>
            <input type="text" name="fEmail" placeholder="Email">
            <label>Password:</label>
            <input type="password" name="pwd" placeholder="Password">
            <div class="clear"></div>
            <button type="submit" name="submit" value="Login">Login</button>
        </form>
        <div class="clear"></div>
        <p>Don't have an account? <a href="index.php?gl=register">Create one</a>
        </div>
    <?php
}
elseif($pageLocation == "register") {
    if(!isset($_POST['fEmail']) || !empty($rErrors)) {
    ?>
        <div class="formWrap">
        <h5>Register</h5>
        <?php echo $rErrors; ?>
        <form method="POST">
            <label>Email:</label>
            <input type="text" name="fEmail" placeholder="Email">
            <label>Password:</label>
            <input type="password" name="pwd" placeholder="Password">
            <label>Confirm Password:</label>
            <input type="password" name="pwd2" placeholder="Password">
            <div class="clear"></div>
            <button type="submit" name="submit" value="Login">Login</button>
            <input type="hidden" name="pageLocation" value="register">
        </form>
        <div class="clear"></div>
        </div>
    <?php
    }

    $rErrors = "";
    $rUsername = $_POST['fEmail'];
    $rPassword = $_POST['pwd'];
    $rPassword2 = $_POST['pwd2'];

    if($rPassword != $rPassword2) {
        $rErrors += "Passwords do not match.<br>";
    }

    if(strlen($rPassword) < 7) {
        $rErrors += "Please make your password longer.<br>";
    }

    if(empty($rUsername) || empty($rPassword) || empty($rPassword2)) {
        $rErrors += "Please fill in all fields.";
    }

    if(empty($rErrors)) {
        $result = mysqli_query("INSERT INTO users VALUES (NULL, '$rUsername', '$rUSername', '$rPassword'");
        echo "Thank you for joining.";
    }

}

?>