




<?php

    $email = "scczxomeone@somewhere.com";
    $default = "mp";
    $size = 150;
    
    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

?>