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
    <h4>Sign In</h4>
    <hr>
        <div class="row">
            <form method="post" action="<?= base_url('auth/check') ?>" autocomplete="off">
            <?php if (!empty(session()->getFlashData('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashData('fail'); ?></div>
                <?php endif; ?>
                <?php if (!empty(session()->getFlashData('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashData('success'); ?></div>
                <?php endif; ?>
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'email') : ''; ?></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                    <span class="text-danger"><?= isset($validation) ? displayError($validation, 'password') : ''; ?></span>

                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form><br>
            <a href="<?= site_url('auth/register') ?>">don't have an account? create one.</a>

        </div>
    </div>

    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>