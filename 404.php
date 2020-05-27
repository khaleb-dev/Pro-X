<?php 
  include './application/utilities/utility.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>400 :-: <?= Utility::APPLICATION_TITLE?></title>
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

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
              The page you were looking for could not be found.
            </div>
            <div class="page-search">
              <form>
                <div class="form-group floating-addon floating-addon-not-append">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-lg">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="mt-3">
                <a href="index.html">Back to Home</a>
              </div>
            </div>
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