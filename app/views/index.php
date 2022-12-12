<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/client_head.php'; ?>

<body>

    <!-- header section starts  -->

    <?php require APPROOT . '/views/includes/client_nav.php'; ?>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(<?php echo URLROOT ?>/images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="<?php echo URLROOT ?>/pages/package" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(<?php echo URLROOT ?>/images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(<?php echo URLROOT ?>/images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="<?php echo URLROOT ?>/images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- home about section starts  -->

    <section class="home-about">

        <div class="image">
            <img src="<?php echo URLROOT ?>/images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="<?php echo URLROOT; ?>/pages/about" class="btn">read more</a>
        </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts  -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">
            <?php $date = date('Y-m-d'); ?>
            <?php foreach ($data['products'] as $product) : ?>
                <?php if ($product->places_availables > 0 && $product->date_depart > $date) { ?>
                    <div class="box">
                        <div class="image">
                            <img src="<?php echo URLROOT ?>/images/img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $product->title; ?></h3>
                            <h2><?php echo $product->destination; ?></h2>
                            <h4><?php echo $product->date_depart; ?></h4>
                            <p><?php echo $product->description; ?></p>
                            <?php if ($_SESSION['logged'] == true) { ?>
                                <a href="<?php echo URLROOT; ?>/pages/buy/<?php echo $product->id; ?>"><button class="btn">Book Now</button></a>
                            <?php
                            } ?>

                        </div>
                    </div>
                <?php
                } ?>


            <?php endforeach; ?>




        </div>

        <div class="load-more"> <a href="<?php echo URLROOT; ?>/pages/package" class="btn">load more</a> </div>

    </section>

    <!-- footer section starts  -->


    <?php require APPROOT . '/views/includes/footer.php'; ?>
    <!-- footer section ends -->

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>

</body>

</html>