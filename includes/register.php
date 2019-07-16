<?php
// register form

if(!isset($_POST['pageLocReg'])) {
    ?>
        <div class="formWrap">
        <h5>Register</h5>
        <?php if(isset($rErrors) && !empty($rErrors)) { echo $rErrors; } ?>
        <form method="POST">
            <label>Email:</label>
            <input type="text" name="fEmail" placeholder="Email">
            <label>Password:</label>
            <input type="password" name="pwd" placeholder="Password">
            <label>Confirm Password:</label>
            <input type="password" name="pwd2" placeholder="Password">
            <div class="clear"></div>
            <button type="submit" name="submit" value="Login">Login</button>
            <input type="hidden" name="pageLocReg" value="register">
        </form>
        <div class="clear"></div>
        </div>
    <?php
}
elseif(isset($_POST['pageLocReg'])) {

    $pageLocation = "register";
    $rErrors = "";
    if(isset($_POST['fEmail'])) $rUsername = sanitizeData($_POST['fEmail']);
    if(isset($_POST['pwd'])) $rPassword =  sanitizeData($_POST['pwd']);
    if(isset($_POST['pwd2'])) $rPassword2 =  sanitizeData($_POST['pwd2']);

    if($rPassword != $rPassword2) {
        $rErrors .= "Passwords do not match.<br>";
    }

    if(strlen($rPassword) < 7) {
        $rErrors .= "Please make your password longer.<br>";
    }

    if(empty($rUsername) || empty($rPassword) || empty($rPassword2)) {
        $rErrors .= "Please fill in all fields.";
    }

    if(empty($rErrors)) {
        $result = mysqli_query("INSERT INTO users VALUES (NULL, '$rUsername', '$rUSername', '$rPassword'");
        echo "Thank you for joining.";
    }
    else {
        echo "<p class='formErrors'>".$rErrors."</p>";
    }
}