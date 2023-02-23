<?php
include_once "pages/config/config.php";
include_once "pages/config/inc.library.php";
include_once "pages/config/fungsi_indotgl.php";

$query = mysqli_query($koneksidb, "SELECT * FROM setting")
or die('Query salah : '.mysqli_error($koneksidb));
$myData = mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title><?php echo $myData['nama']; ?></title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="images/logo.png" sizes="180x180">
    <link rel="icon" href="images/logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/logo.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
    <!-- screen loader -->




<form action="login-check.php" method="post" class="margin-bottom-0">
    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->

        
        
        <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
						    <center><img src="images/logo_quchekin.png"></center>
							
<br>
                   
							
	<?php  
      if (empty($_GET['alert'])) {
        echo "";
      } 
      elseif ($_GET['alert'] == 1) {
        echo "<center><font color='#ffffff'><i class='icon fa fa-times-circle'></i> Login Gagal !</font><br><br>";
      }
      elseif ($_GET['alert'] == 2) {
        
      }
	  elseif ($_GET['alert'] == 3) {
        echo "<center><font color='#ffffff'><i class='icon fa fa-times-circle'></i> Anda tidak berhak mengakses halaman ini.</font><br><br>";
      }
    ?>
                            <div class="form-group float-label active">
                                <input type="text" id="username" name="username" class="form-control text-white" placeholder="">
                                <label class="form-control-label text-white">Username</label>
                            </div>
                            <div class="form-group float-label position-relative active" >
                                <input type="password" id="password" name="password" class="form-control text-white " placeholder="">
                                <label class="form-control-label text-white">Password</label>
                            </div>  
							
							        <div class="row justify-content-center">
            <div class="col">
			<button type="submit" name="login" class="btn btn-default rounded btn-block"><i class="fa fa-key"></i> Login</button>
            </div>
        </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
			<center>Copyright &copy; <?php echo $myData['footer']; ?></center>
            </div>
        </div>
    </div>
</form>

    <!-- Required jquery and libraries -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="js/main.js"></script>
    <script src="js/color-scheme-demo.js"></script>


    <!-- page level custom script -->
    <script src="js/app.js"></script>
    
</body>

</html>
