<?php

function sanitizeData(var) {
    mysql_real_escape_string(var);
    trim(var);
    strip_tags(var);
    return var;
}

?>