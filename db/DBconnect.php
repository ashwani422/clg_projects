<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "lmsDB";
    
    $mysqli = new mysqli($host, $user, $password, $db) or die($mysqli->error);
?>