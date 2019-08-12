<?php

// logout destroy session

session_destroy();

echo "<p><strong>You are now logged out.</strong></p>";
header( "Refresh:1; url=http://localhost/eshop/index.php", true, 303);

?>
