<?php include "templates/header.php"; ?>
<style>
    <?php include "templates/css/jokes_style.css"; ?>
</style>
<?php include "../data/functions.php"; ?>

    <?php

        // Log out the user when viewing the login page.
        $_SESSION['user']['logged-in'] = false;

        // If the 'Send' button is clicked, process the login information.
        if (isset($_POST['login'])) {            
            attempt_login($_POST['name'], $_POST['email'], $_POST['password']);
        }

    ?>

    <div class="container-main">

        <div class="title-class">JOKE REVIEWER</div>

        <form action="index.php" method="post" id="form-index-id">

            <div class="form-group">
                <label for="text" class="label-index-class">User name</label>
                <input type="text" class="form-control" id="username-id" name="name" value="" placeholder="Type your user name...">
            </div>

            <div class="form-group">
                <label for="email" class="label-index-class">Email address</label>
                <input type="email" class="form-control" id="email-id" name="email" value="" placeholder="Type your email address...">
            </div>
            
            <div class="form-group">
                <label for="Password" class="label-index-class">Password</label>
                <input type="Password" class="form-control" id="password-id" name="password" value="" placeholder="Type your password...">
            </div>

            <button type="submit" class="btn btn-primary" id="index-button-id" name="login">Send</button>

        </form>

    </div>

<?php include "templates/footer.php"; ?>