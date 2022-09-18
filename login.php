<?php
    $user = $_POST ["user"];
    $pass = $_POST ["password"];

    $ckuser = "admin";
    $ckpass = "1234";

    if ($ckuser == $user && $ckpass == $pass ) {
        header ("location: http://www.potrerodigital.org");
    } 
    else {
        header ("location: error.html");
    }


?>