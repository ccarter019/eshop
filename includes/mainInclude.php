<?php

if(!empty($pageLocation)) {

    echo "Page location set";

}

if($pageLocation == "login") {
    ?>
        <h5>Login</h5>
        <form method="POST">
            <label>Email:</label>
            <input type="email" name="fEmail">
            <label>Password:</label>
            <input type="password">
            <input type="submit" name="submit" value="Login">
        </form>
    <?php
}

?>