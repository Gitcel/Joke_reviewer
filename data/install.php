<?php

    require "config.php";

    global $servername, $username, $password, $port, $dbname, $getContents;

    $connection = mysqli_connect($servername, $username, $password, "", $port);

    if (!$connection) {
        die("Connection failed: ".mysqli_connect_error()."<br>");
    } else {
        echo "Connected.<br>";
    }

    if (mysqli_multi_query($connection, $getContents)) {
        echo "Database and tables were created.<br>";  
    } else {
        echo "The database and/or tables couldn't be created.<br>";
    }

    mysqli_close($connection);

?>