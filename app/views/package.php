<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/client_head.php'; ?>


<body>

    <?php require APPROOT . '/views/includes/client_nav.php'; ?>

    <div class="heading" style="background:url(<?php echo URLROOT ?>/images/header-bg-2.png) no-repeat">
        <h1>packages</h1>
    </div>

    <!-- packages section starts  -->

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="box-container">

            <?php
            foreach ($products as $product) { ?>
                <?php if ($product['places_availables'] > 0) { ?>
                    <div class="box">
                        <div class="image">
                            <img src="<?php echo URLROOT ?>/images/img-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $product['title']; ?></h3>
                            <h2><?php echo $product['destination']; ?></h2>
                            <h4><?php echo $product['date_depart']; ?></h4>
                            <p><?php echo $product['description']; ?></p>
                            <?php if ($_SESSION['logged'] == true) { ?>
                                <form action="" method="POST">
                                    <input name="product_id" type="hidden" value="<?php echo $product['id']; ?>">
                                    <input name="buy" type="submit" class="btn" value="Book Now">
                                </form>
                            <?php

                            } ?>
                        </div>
                    </div>

                <?php

                }  ?>

            <?php
            }

            ?>

        </div>

    </section>

    <!-- packages section ends -->
    <?php require APPROOT . '/views/includes/footer.php'; ?>
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>

</body>

</html>