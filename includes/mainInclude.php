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
    ?>
        <div class="formWrap">
        <h5>Register</h5>
        <form method="POST">
            <label>Email:</label>
            <input type="text" name="fEmail" placeholder="Email">
            <label>Password:</label>
            <input type="password" name="pwd" placeholder="Password">
            <label>Confirm Password:</label>
            <input type="password" name="pwd" placeholder="Password">
            <div class="clear"></div>
            <button type="submit" name="submit" value="Login">Login</button>
        </form>
        <div class="clear"></div>
        </div>
    <?php
}

?>