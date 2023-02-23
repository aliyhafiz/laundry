<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED)); 
$server   = "localhost";
$username = "mikj1189_raja";
$password = "raja2020";
$database = "mikj1189_quchekin";

$koneksidb = new mysqli($server, $username, $password, $database);

if ($koneksidb->connect_error) {
    die('Koneksi Database Gagal : '.$koneksidb->connect_error);
}

define('AUTH_KEY', 'AJWKXLAJSCLWLW');
?>