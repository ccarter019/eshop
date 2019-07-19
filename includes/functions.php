<?php

function sanitizeData($var) {
    trim($var);
    strip_tags($var);
    filter_var($var, FILTER_SANITIZE_STRING);
    return $var;
}

function createSalt()
{
    $text = md5(uniqid(rand(), TRUE));
    return substr($text, 0, 3);
}


?>