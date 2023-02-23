<?php
include_once "pages/config/config.php";

date_default_timezone_set('Asia/Jakarta');

$username = mysqli_real_escape_string($koneksidb, stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
$password = mysqli_real_escape_string($koneksidb, stripslashes(strip_tags(htmlspecialchars(trim($_POST['password'])))));
$status = mysqli_real_escape_string($koneksidb, stripslashes(strip_tags(htmlspecialchars(trim($_POST['status'])))));

$modEnkrip 	= md5(AUTH_KEY . md5($password) . AUTH_KEY );	

if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header("Location: index.php?alert=1");
}
else {
	$query = mysqli_query($koneksidb, "SELECT * FROM user WHERE username='$username' AND password='$modEnkrip' AND ket='Aktif' ")
									or die('Ada kesalahan pada query user : '.mysqli_error($koneksidb));
	$rows  = mysqli_num_rows($query);

	if ($rows > 0) {
		$data  = mysqli_fetch_assoc($query);

		session_start();
		
		$_SESSION['iduser']  		= $data['iduser'];
		$_SESSION['username'] 		= $data['username'];
		$_SESSION['password'] 		= $data['password'];
		$_SESSION['status'] 		= $data['status'];
		$_SESSION['namauser'] 		= $data['namauser'];
		$_SESSION['session'] 		= $data['session'];
			
			echo "<meta http-equiv='refresh' content='0; url=pages/administrator/main.php?open=Dashboard'>";

	}

	else {
		header("Location: index.php?alert=1");
	}
	
	
}
?>