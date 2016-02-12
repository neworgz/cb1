<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "gn14c3";
$url_folder_gambar = 'http://localhost:8080/public_html/uploadgambar/'; 
//$dir_gambar = 'D:\xampp\htdocs\public_html\uploadgambar\\';
//$dir_gambar = 'http:\\localhost\public_html\uploadgambar\\';

$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); 
mysql_select_db($db); ?>
