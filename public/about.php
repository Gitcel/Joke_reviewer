<?php include "templates/header.php"; ?>
<?php include "../data/functions.php"; ?>
<?php header("href=css/jokes_style.css type=text/css rel=stylesheet"); ?>

<?php logout(); ?>

    <div class="about-main">
        <p>
            This is an application that generates a different joke every time a user returns to the joke
            page. The user can rate the joke and each joke is ranked on the ratings page.
        </p>
    </div>

<?php include "templates/footer.php"; ?>

<style>

    :root {

        --bodyAbout: rgba(40, 40, 40, 1);
        --title-textShadow: 4px 4px 2px rgba(100, 20, 20, 0.9);
        --indexButton-textShadow: 2px 2px 0 rgba(20, 20, 20, 0.8);
        --indexButton-boxShadow: 4px 4px 0 rgba(20, 20, 20, 0.8);

    }

    body {

        background: var(--bodyAbout);

    }

</style>