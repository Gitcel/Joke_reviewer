<?php include "templates/header.php"; ?>
<style>
    <?php include "templates/css/jokes_style.css"; ?>
</style>
<?php include "../data/functions.php"; ?>

<?php

    // Store the joke in a variable.
    $joke = getJoke();

    // Store the joke in the database.
    if ($joke != null) {
        storeJoke($joke);
    }
    
    // Check if the joke variable contains the JSON-decoded object, before storing it in the database.
    if (isset($_POST['rate-button'])) {
        storeRating($joke['id'], $_POST['rate']);
    }

    // If 'Logout' is clicked, then the user is redirected.
    logout();
    
?>

<div class="container-jokes">

    <!-- Display the joke onscreen. -->
    <div id="joke-id"><?php echo $joke['setup']; ?><div>
    <div id="punchline-id"><?php echo $joke['punchline']; ?><div>

    <div class="container-rating">

        <h3 class="title-rating">Rate this joke.</h3>

        <form action="" method="post">

            <div class="container-rate">
                <input type="number" class="rate-1" name="rate" min="1" max="5" size="1" required value="">
                <span class="rate-2">/ 5</span>
            </div>

            <div class="container-rate-button">
                <button type="submit" class="rate-button" name="rate-button">Send rating</button>
            </div>

        </form>

    </div>

</div>

<?php include "templates/footer.php"; ?>