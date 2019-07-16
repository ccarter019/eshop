<?php

function sanitizeData($var) {
    trim($var);
    strip_tags($var);
    filter_var($var, FILTER_SANITIZE_STRING);
    return $var;
}

function checkIss($dta) {
    if(isset($dta)) {
        return $dta;
    }
}

?>