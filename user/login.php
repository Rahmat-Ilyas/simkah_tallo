<?php
require('../config.php');

if (isset($_SESSION['login_user'])) header("location: index.php");

$email = null;
$err_email = false;
$err_pass = false;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $get = mysqli_fetch_assoc($result);

    if ($get) {
        $get_password = $get['password'];

        if (password_verify($password, $get_password)) {
            $_SESSION['login_user'] = $get_password;
            $_SESSION['login_user_get_id'] = $get['id'];
            header("location: index.php");
            exit();
        } else $err_pass = true;
    } else $err_email = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login Page - Panel User</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon icon -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper" style="background: url('../img/green.jpg');">
    <div class="auth-content text-center">
        <!-- <img src="assets/images/logo.png" alt="" class="img-fluid mb-4"> -->
        <img src="../img/logo.png" height="60" alt="" class="mb-3">
        <b class="ml-2 mb-5 text-white" style="font-size: 18px;">SIMKAH TALLO</b>
        <div class="card borderless">
            <div class="row align-items-center ">
                <form method="post">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Login Panel User</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email...">
                                <?php if ($err_email == true) { ?>
                                    <div class="text-danger text-left">
                                        Email tidak ditemukan
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Password...">
                                <?php if ($err_pass == true) { ?>
                                    <div class="text-danger text-left">
                                        Password tidak sesuai
                                    </div>
                                <?php } ?>
                            </div>
                            <button type="submit" name="login" class="btn btn-block btn-primary mb-4">Login</button>
                            <hr>
                            <p class="mb-0 text-muted">Belum punya akun? <a href="daftar.php" class="f-w-400">Lakukan pengajuan disini</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>