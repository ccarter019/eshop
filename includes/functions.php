<?php

function sanitizeData($var) {
    trim($var);
    strip_tags($var);
    return $var;
}

?>