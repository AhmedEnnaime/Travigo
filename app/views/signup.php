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
                    <form action="<?php echo URLROOT; ?>/users/signup" method="POST">
                        <div class="input-group mb-3">
                            <input name="name" type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" placeholder="Username" value="<?php echo $data['name']; ?>">
                            <span class="invalid-feedback"><?php echo $data['name_err'];  ?></span>
                        </div>
                        <div class="input-group mb-3">
                            <input name="phone" type="text" class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>" placeholder="Phone number" value="<?php echo $data['phone']; ?>">
                            <span class="invalid-feedback"><?php echo $data['phone_err'];  ?></span>
                        </div>
                        <div class="input-group mb-3">
                            <input name="birthday" type="date" class="form-control <?php echo (!empty($data['birthday_err'])) ? 'is-invalid' : ''; ?>" placeholder="Birthday" value="<?php echo $data['birthday']; ?>">
                            <span class="invalid-feedback"><?php echo $data['birthday_err'];  ?></span>
                        </div>
                        <div class="input-group mb-3">
                            <input name="email" type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="Email" value="<?php echo $data['email']; ?>">
                            <span class="invalid-feedback"><?php echo $data['email_err'];  ?></span>
                        </div>
                        <div class="input-group mb-4">
                            <input name="password" type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" placeholder="password" value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err'];  ?></span>
                        </div>


                        <button type="submit" name="add" class="btn btn-primary shadow-2 mb-4">Sign up</button>

                    </form>

                    <p class="mb-0 text-muted">Already have an account? <a href="<?php echo URLROOT; ?>/users/login"> Log in</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>