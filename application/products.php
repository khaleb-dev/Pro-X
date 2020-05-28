<?php 
@session_start();
include_once './utilities/utility.php';
if(empty($_SESSION['unique_id'])){
    header("Location: ../login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Products :-: <?= Utility::APPLICATION_TITLE?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/css/font-awesome-5.8.2/css/all.css">
  <!-- Template CSS -->
  <link href="../assets/css/iStyle.css" rel="stylesheet">
  <link href="../assets/css/iComponents.css" rel="stylesheet">
  <!-- Custom style CSS -->
  <!-- <link href="../assets/css/custom.css" rel="stylesheet"> -->
  <link href="../assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  <?php include_once './app_fragment/frag_css.php'?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?php include_once './app_fragment/frag_topnav.php' ?>
      <?php include_once './app_fragment/frag_sidenav.php' ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
          </div>
        </section>
      </div>
      
      <?php include_once './app_fragment/frag_app_footer.php' ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="../assets/js/iApp.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="../assets/js/iScripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
  <!-- Inline Scripts -->
  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery("#proLink").attr('class','dropdown active');
    });
  </script>
</body>
</html>