<?php
    @session_start();
    include_once './application/utilities/utility.php';
    include_once './application/app_controller/authController.php';
    $_SESSION['lCSRF'] = Utility::Generate_Random_Token();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login :-: <?= Utility::APPLICATION_TITLE?></title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/css/font-awesome-5.8.2/css/all.css">
	<!-- Template CSS -->
	<link href="assets/css/iStyle.css" rel="stylesheet">
	<link href="assets/css/iComponents.css" rel="stylesheet">
	<!-- Custom style CSS -->
	<!-- <link href="assets/css/custom.css" rel="stylesheet"> -->
	<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body class="theme-cyan">
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form action="" class="needs-validation" method="POST" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Email/Username</label>
                                        <input autofocus="" class="form-control" id="txtEmail" name="txtEmail" required="" tabindex="1" type="text">
                                        <div class="invalid-feedback">Please fill in your email or username</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label class="control-label" for="password">Password</label>
                                            <div class="float-right">
                                                <a class="text-small" href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <input class="form-control" id="txtPwd" name="txtPwd" required="" tabindex="2" type="password">
                                        <div class="invalid-feedback">please fill in your password</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="remember-me" name="remember" tabindex="3" type="checkbox">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="lCSRF" value="<?php echo $_SESSION['lCSRF']; ?>" />
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" tabindex="4" type="submit" name="btnLogin" value="Login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">Don't have an account? <a href="#">Contact Admin</a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <!-- <script src="assets/js/iApp.min.js"></script> -->
    <!-- JS Libraies -->
    <script type="text/javascript" src="assets/vendor/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/vendor/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/vendor/js/bootstrap.min.js"></script>
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/iScripts.js"></script>
    <!-- Custom JS File -->
    <!-- <script src="assets/js/custom.js"></script> -->
</body>
</html>