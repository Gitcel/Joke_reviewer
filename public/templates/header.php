<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/jokes_style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Joke Reviewer</title>

</head>
<body>

    <!-- Navigation bar -->
    <div class="navbar-main">
    
        <a href="index.php"><?php echo $_SESSION['user']['logged-in'] == true ? "Logout" : "Sign in"; ?></a>
        <a href="<?php echo $_SESSION['user']['logged-in'] == true ? "jokes.php" : "index.php"; ?>">Jokes</a>
        <a href="ratings.php">Ratings</a>
        <a href="about.php">About</a>
        <a href="signup.php">Create an account</a>

    </div>

    <div class="container">

<?php include "footer.php" ?>