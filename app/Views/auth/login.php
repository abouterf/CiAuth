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
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form><br>
            <a href="<?= site_url('auth/register') ?>">don't have an account? create one.</a>

        </div>
    </div>

    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>