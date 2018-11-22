<?php

    $servername = "localhost"; // 127.0.0.1 is common.
    $port = "3306"; // 8888 for XAMPP & 3306 for WAMP.
    $username = "root";
    $password = "";
    $dbname = "joke_reviewer";
    $getRatings = file_get_contents("../data/init_ratings.sql");
    // $getContents = file_get_contents("init.sql");

?>