<?php
session_start();
if (empty($_SESSION['telepon'])){
 //header('Location: http://vhost.ti.ukdw.ac.id/~gn14c3/home.php');
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Try Out SD</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link href='gambar/topi.gif' rel='shortcut icon' id="topi">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!--LOGO-->
			<img id="logo" src="gambar/tryout-hal2.gif" title="Try Out SD"><br class="enterlogo" />
			<span id="menugaris"><img src="gambar/menugaris.gif"  /></span>
			<br class="enterlogo" /><br class="enterlogo" /><br class="enterlogo" /><br class="enterlogo" />
			
			<!-- MENU -->
			<nav id="navigasi"><ul>

				<!-- HOME-->
				<li>
					<a href="home.html"><img id="lghome" src="gambar/homelg.png" title="Home"></a><a id="thome" href="home.html">HOME</a>
				</li><br class="enterlogo" />
				<!-- MAPEL-->
				<li><span class="lgcucuksamping"><img class="lgcucuksamping" src="gambar/cucuksamping.gif"></span>
				<a id="tmapel" href="#">MAPEL</a><span class="lgcucuk"><img class="lgcucuk" src="gambar/cucuk.gif" title="Mapel"></span>
			 		<ul id="dropdown">
 						<li><a href="mapelbindo.php">Bahasa Indonesia</a></li>
						<li><a href="#">Matematika</a></li>
						<li><a href="#">Ilmu Pengetahuan Alam</a></li>
		    		</ul>
				</li><br class="enterlogo" />
				<!--HASIL-->
				<li><a href="score.php"><img id="lghasil" src="gambar/hasillg.gif"></a><a id="thasil" href="score.php">HASIL</a></li><br class="enterlogo" />
				
				<!--SEARCH-->
				<span id="search_kabeh">
					<img id="lgsearch" src="gambar/search.gif" title="search">
					<form method="get" id="search" action="#">
						<input type="text" id="isearch" placeholder="Search" />
					</form>
				</span>

				<!--ACCOUNT-->
				<li id="useratas"><img id="lgaccount" src="gambar/user.gif" title="Lgaccount"> <h2 id="username"><?php echo $_SESSION['username']; ?></h2><img id="lgcucuk1" src="gambar/cucuk.gif" title="cucuk">
					<ul>
 						<li><a href="index.php">Keluar</a></li>
		    		</ul>
				</li>
				</ul>	
			</nav>
		</div>
		
		
		
		<div id="content"><br>
			<div id="deskripsi">
			<h3 id="namapel">Bahasa Indonesia</h3><hr>
				<div id="tahun">
				<span id="ingat">! Ingat kerjakan dengan jujur !</span><br/><br/>
				<ul>
					<li><a href="soalbindo.html">Soal Tahun 2010</a></li>
					<li><a href="#">Soal Tahun 2011</a></li>
					<li><a href="#">Soal Tahun 2012</a></li>
					<li><a href="#">Soal Tahun 2013</a></li>
					<li><a href="#">Soal Tahun 2014</a></li>
					<li><a href="soalbindo15.php">Soal Tahun 2015</a></li>
				</ul>
				</div>
			</div>
			<!--
			<img src="gambar/bocah-ngomong.gif" id="bocah">-->
		</div>
			
	
		<div id="footer">
			<span>created By Cah SD</span>
		</div>
	</div>
</body>
</html>
