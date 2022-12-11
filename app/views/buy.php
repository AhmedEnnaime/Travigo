<!DOCTYPE html>
<html lang="en">

<?php require APPROOT . '/views/includes/client_head.php'; ?>

<body>
    <?php require APPROOT . '/views/includes/client_nav.php'; ?>

    <div class="heading" style="background:url(<?php echo URLROOT ?>/images/header-bg-3.png) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts  -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>
        <?php flash('buy_success'); ?>
        <form action="<?php echo URLROOT; ?>/pages/buy/<?php echo $data['product_id']; ?>" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input disabled type="text" placeholder="enter your name" value="<?php echo $data['name']; ?>" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input disabled type="email" placeholder="enter your email" value="<?php echo $data['email']; ?>" name="email">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input disabled type="text" placeholder="place you want to visit" value="<?php echo $data['destination']; ?>" name="destination">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" class=" <?php echo (!empty($data['places_err'])) ? 'is-invalid' : ''; ?>" placeholder="number of guests" name="places">
                    <span style="color: red;" class="invalid-feedback"><?php echo $data['places_err'];  ?></span>
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section ends -->

    <!-- footer section starts  -->

    <?php require APPROOT . '/views/includes/footer.php'; ?>

    <!-- footer section ends -->



    <!-- Required Js -->
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>

</html>