<?php
    $dbhost = "182.50.131.14";
    $dbuser = "mtastudDB1";
    $dbpass = "mtastudDB1!";
    $dbname = "mtastudDB1";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>