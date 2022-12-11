<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/client_head.php'; ?>

<body>

    <!-- header section starts  -->

    <?php require APPROOT . '/views/includes/client_nav.php'; ?>

    <!-- header section ends -->

    <div class="heading" style="background:url(<?php echo URLROOT ?>/images/header-bg-1.png) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- about section starts  -->

    <section class="about">

        <div class="image">
            <img src="<?php echo URLROOT ?>/images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- reviews section starts  -->

    <section class="reviews">

        <h1 class="heading-title"> clients reviews </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-1.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-2.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-3.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-5.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="<?php echo URLROOT ?>/images/pic-6.png" alt="">
                </div>

            </div>

        </div>

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