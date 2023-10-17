<?php

    $database= new mysqli("localhost","root","","oacms");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>