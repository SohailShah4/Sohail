<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "company";

    $con = new mysqli($server,$user,$pass,$db);

    if(!$con)
    {
        die(mysqli_error());
    }
?>