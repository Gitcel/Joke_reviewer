<?php

    require "config.php";

    // Boolean switch set to false.
    $errorCreateBool = 0;

    function getJoke() {

        // Initialize cURL.
        $ch = curl_init(); 

        // Set the URL. 
        curl_setopt($ch, CURLOPT_URL, "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_joke"); 

        // Return the transfer as a string.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // Get the output string. 
        $output = curl_exec($ch);

        $joke = json_decode($output, true);

        // close the cURL resource.
        curl_close($ch);  

        return $joke;

    }

    function storeJoke($joke) {

        require "config.php";

        global $servername, $username, $password, $dbname, $port;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);

        if (!$connection) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $jokeID = $joke['id'];
        $jokeSetup = $joke['setup'];
        $jokePunchline = $joke['punchline'];

        $_SESSION['user']['joke-id'] = $jokeID;

        $sql = "INSERT INTO jokes (id, setup, punchline) VALUES (\'$jokeID\', \'$jokeSetup\', \'$jokePunchline\')";
        $result = mysqli_query($connection, $sql);

    }

    function storeRating($joke_id, $rating) {

        require "config.php";

        global $servername, $username, $password, $dbname, $port;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);

        if (!$connection) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['joke-id'] = $joke_id;
        $_SESSION['user']['rating'] = $rating;

        $sql = "INSERT INTO reviews (user_id, joke_id, rating) VALUES ('$user_id', '$joke_id', '$rating')";
        $result = mysqli_query($connection, $sql);

    }

    function connect_to_db() {

        require "config.php";

        global $servername, $username, $password, $dbname, $port;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);

        if (!$connection) {
            die("Connection failed: ".mysqli_connect_error());
        }

    }

    function attempt_signup($name_user, $email_user, $password_user) {

        require "config.php";

        global $servername, $username, $password, $dbname, $port, $errorCreateBool;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);

        if (!$connection) {
            die("Connection failed: ".mysqli_connect_error());
        }
        // Check all columns - Query
        $sql_check = "SELECT id, name, email, password FROM users WHERE name = '$name_user' AND email = '$email_user' AND password = '$password_user'";
        
        // Check individual columns - Query
        $sql_check_name = "SELECT id, name FROM users WHERE name = '$name_user'";
        $sql_check_email = "SELECT id, email FROM users WHERE email = '$email_user'";
        $sql_check_password = "SELECT id, password FROM users WHERE password = '$password_user'";

        // Insert row - Query
        $sql_insert = "INSERT INTO users (name, email, password) VALUES ('$name_user', '$email_user', '$password_user')";
        
        // Initiate - Query
        $result_check = mysqli_query($connection, $sql_check);

        // Initiate individual queries - Query
        $result_check_name = mysqli_query($connection, $sql_check_name);
        $result_check_email = mysqli_query($connection, $sql_check_email);
        $result_check_password = mysqli_query($connection, $sql_check_password);

        $row_name;
        $row_email;
        $row_password;

        // Check if there is a record with an identical name.
        if ($result_check_name -> num_rows > 0) {
            $errorCreateBool = 1;            
        }

        // Check if there is a record with an identical email.
        if ($result_check_email -> num_rows > 0) {
            $errorCreateBool = 1;            
        }

        // Check if there is a record with an identical password.
        if ($result_check_password -> num_rows > 0) {
            $errorCreateBool = 1;            
        }
        
        // Check if there is no record with an identical name, email and password.
        else if (($result_check_name -> num_rows == 0) && ($result_check_email -> num_rows == 0) && ($result_check_password -> num_rows == 0)) {

            global $row, $row_name, $row_email, $row_password;

            mysqli_query($connection, $sql_insert);
            attempt_login($name_user, $email_user, $password_user);

        }

    }

    function attempt_login($name_user, $email_user, $password_user) {

        require "config.php";

        global $servername, $username, $password, $dbname, $port, $password_hash;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);
        // If connection fails, return false.
        if (!$connection) {
            return false;
        }

        // Store the query for the login information.
        $sql = "SELECT id, name, email, password FROM users WHERE name = '$name_user' AND email = '$email_user' AND password = '$password_user'";
        $result = mysqli_query($connection, $sql);

        // Check if the table has that record.
        if (mysqli_num_rows($result) == 1) {
            
            // Fetch that record and store that information into the session variable.
            while ($row = mysqli_fetch_assoc($result)) {

                $_SESSION['user']['id'] = $row['id'];
                $_SESSION['user']['name'] = $row['name'];
                $_SESSION['user']['email'] = $row['email'];
                $_SESSION['user']['logged-in'] = true;
            
            }
            
        } else {

            unset($_SESSION['user']);

        }

    }

    function rank_ratings() {

        require "config.php";

        global $servername, $username, $password, $dbname, $port, $getRatings;

        $connection = mysqli_connect($servername, $username, $password, $dbname, $port);

        // Check if the connection fails.
        if (!$connection) {
            return false;
        }

        // Query the SQL file to sort the records.
        $sql_ratings_result = mysqli_query($connection, $getRatings);

        // Check if the query failed.
        if (!$sql_ratings_result) {
            return false;

        } else {

            // Get the rows of rating records.
            while ($rows = mysqli_fetch_assoc($sql_ratings_result)) {
                // Store the joke setup in the array.
                $_SESSION['jokes']['setup'][] = $rows['setup'];
                // Store the rounded off floating point numbers.
                $_SESSION['jokes']['averages'][] = round($rows['averages']);

            }

        }

    }

    function login() {

        if ($_SESSION['user']['logged-in'] == true && $_SERVER['REQUEST_URI'] == "/index.php") {

        }

    }

    function logout() {

        // If the user is viewing the index page, switch logged-in boolean to false.
        if ($_SERVER['REQUEST_URI'] == "/index.php") {
            $_SESSION['user']['logged-in'] = false;
        }

        // If the user is viewing the signup page, switch logged-in boolean to false.
        if ($_SERVER['REQUEST_URI'] == "/signup.php") {
            $_SESSION['user']['logged-in'] = false;
        }

    }

?>