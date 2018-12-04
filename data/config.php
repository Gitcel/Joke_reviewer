<?php

    $servername = "localhost"; // 127.0.0.1 is common.
    $port = "3306"; // 8888 for XAMPP & 3306 for WAMP.
    $username = "root"; // Root is for public access. Otherwise, change it if you have a user name.
    $password = ""; // Change this if you have a password.
    $dbname = "joke_reviewer"; // Change the database name if you want.
    $getRatings = file_get_contents("../data/init_ratings.sql"); // The SQL script for the Ratings page.
    $getContents = file_get_contents("../data/init.sql"); // The SQL intallation script for the database.

?>