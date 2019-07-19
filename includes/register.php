<?php
// register form
$rErrors = "";

if(!isset($_POST['pageLocReg'])) {
    require "register_form.php";
}
elseif(isset($_POST['pageLocReg'])) {

    $pageLocation = "register";
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
        $rErrors .= "Please fill in all fields.<br>";
    }

    // check to see if username/email already exists
    if(!empty($rUsername)) {
        $userCheck = mysqli_query($conn, "SELECT * FROM users WHERE username='$rUsername'");
        if(mysqli_num_rows($userCheck) > 0) {
            $rErrors .= "That email address already exists in our system.<br>";
        }
    }

    if(empty($rErrors)) {
        $options = [
            'cost' => 11,
        ];
        $hash = password_hash($rPassword, PASSWORD_BCRYPT, $options);
        $result = mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$rUsername', '$rUsername', '$hash', '')");
        echo "<h4>Thank you for joining.</h4>";
    }
    else {
        echo "<p class='formErrors'>".$rErrors."</p>";
        require "register_form.php";
    }
}