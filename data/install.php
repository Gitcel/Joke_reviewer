<?php

    require "config.php";

    global $servername, $username, $password, $port, $dbname, $getContents;

    $connection = mysqli_connect($servername, $username, $password, "", $port);

    if (!$connection) {
        die("Connection failed: ".mysqli_connect_error());
    } else {
        echo "Connected.";
    }

    ?><pre><?
        print_r($connection);
        print_r($getContents);
    ?><pre><?
    
    if (mysqli_multi_query($connection, $getContents)) {
        echo "Tables created.";  
    } else {
        echo "Tables couldn't be created.";
    }

    mysqli_close($connection);

?>