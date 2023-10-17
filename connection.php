<?php
$database = new mysqli("localhost", "root", "@Nkn2mw56a8nju", "oacms");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
} ?>