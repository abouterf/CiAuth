<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container" style="padding-top: 50px;">
        <h4>Sign Up</h4>
        <hr>
        <div class="row">

            <form method="post" action="<?= base_url('auth/save') ?>">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name'); ?>">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'name') : ''; ?></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'email') : ''; ?></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password'); ?>">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'password') : ''; ?></span>

                </div>
                <div class="mb-3">
                    <label for="passwordConfirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="passwordConfirmation" id="passwordConfirmation">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'passwordConfirmation') : ''; ?></span>

                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
            </form>
            <br>
            <a href="<?= site_url('auth') ?>">I already have an account, Login.</a>
        </div>
    </div>

    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>