<?php
    
    include "templates/header.php";   

    require "../data/functions.php";
    require "../data/config.php";

    rank_ratings();

    $counter = 1;

?>

    <div class="container-ratings-title">Top 10 jokes</div>

    <div class="container-ratings">
            <?php
            
                foreach ($_SESSION['jokes']['setup'] as $key => $setupItem) {

                    ?>

                        <div class="ratings-list-count">
                            <?php echo $counter++; ?><span class="ratings-list-items"><?php echo $setupItem; ?><span>
                        </div>

                    <?php
                
                    if ($counter == 11) {
                        break;
                    }

                }

            ?>
    </div>

<?php include "templates/footer.php"; ?>