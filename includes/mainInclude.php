<?php

if(!empty($pageLocation)) {
    echo "Page location sget";
}

// Below if statements control which page user is on and populates content
if(empty($pageLocation) || $pageLocation == "login") { // login defaults homepage
    require "login.php";
}
elseif($pageLocation == "register") { // register form
    require "register.php";

}

?>