<!DOCTYPE html>
<html lang="en">


<?php require APPROOT . '/views/includes/head.php'; ?>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Sign up</h3>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input name="phone" type="text" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="input-group mb-3">
                            <input name="birthday" type="date" class="form-control" placeholder="Birthday">
                        </div>
                        <div class="input-group mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <input name="password" type="password" class="form-control" placeholder="password">
                        </div>


                        <button type="submit" name="add" class="btn btn-primary shadow-2 mb-4">Sign up</button>

                    </form>

                    <p class="mb-0 text-muted">Already have an account? <a href="<?php echo URLROOT; ?>/pages/login"> Log in</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>