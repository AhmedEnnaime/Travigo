<!-- header section starts  -->

<section class="header">

    <a href="home.php" class="logo">Travigo</a>

    <nav class="navbar">
        <a href="<?php echo URLROOT; ?>">home</a>
        <a href="<?php echo URLROOT; ?>/pages/about">about</a>
        <a href="<?php echo URLROOT; ?>/pages/package">package</a>


        <?php

        if ($_SESSION['logged'] == true && $_SESSION['role'] == 0) { ?>

            <a href="<?php echo URLROOT; ?>/admin/dashboard">Dashboard</a>
            <a href="./logout.php">Logout</a>
        <?php
        } else if ($_SESSION['logged'] == true && $_SESSION['role'] == 1) { ?>
            <a href="./logout.php">Logout</a>
        <?php
        } else if ($_SESSION['logged'] == false) { ?>
            <a href="<?php echo URLROOT; ?>/pages/login">Login</a>
        <?php
        }
        ?>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->