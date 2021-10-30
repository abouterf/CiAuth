<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

    <title>Dashboard</title>
</head>

<body>
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-md-4">
        <h4>Dashboard</h4>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= ucfirst($userInfo['name'])  ?></td>
                    <td><?= $userInfo['email'] ?></td>
                    <td><a href="<?= site_url('auth/logout') ?>">Logout</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>

</html>