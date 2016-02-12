<?php

session_start();
	if(isset($_SESSION['id']) AND isset($_SESSION['siswa'])){
		$id = $_SESSION['id'];
		$siswa = $_SESSION['siswa'];

	}
	else{	
		if(isset($_POST['id']) AND isset($_POST['password']) AND isset($_SESSION['siswa'])){
			$_SESSION['id'] = $_POST['id'];
			$id = $_SESSION['id'];
			$siswa = $_SESSION['siswa'];
		}
		else {
			header("Location: index.php");
		}
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
			<span id="menugaris"><img src="gambar/menugaris.png"  /></span>
			<br class="enterlogo" /><br class="enterlogo" /><br class="enterlogo" /><br class="enterlogo" />
			
			<!-- MENU -->
			<nav id="navigasi"><ul>

				<!-- HOME-->
				<li>
					<a href="home.php"><img id="lghome" src="gambar/homelg.png" title="Home"></a><a id="thome" href="home.php">HOME</a>
				</li><br class="enterlogo" />
				
				<!-- MAPEL-->
				<li><span class="lgcucuksamping"><img class="lgcucuksamping" src="gambar/cucuksamping.gif"></span>
				<a id="tmapel" href="#">MAPEL</a><span class="lgcucuk"><img class="lgcucuk" src="gambar/cucuk.gif" title="Mapel"></span>
			 		<ul id="dropdown">
 						<li><a href="soalbindo15.php ">Bahasa Indonesia</a></li>
						<li><a href="soalmatek15.php ">Matematika</a></li>
						<li><a href="soalipa15.php">Ilmu Pengetahuan Alam</a></li>
		    		</ul>
				</li><br class="enterlogo" />

				<!--HASIL-->
				<li><a href=""><img id="lghasil" src="gambar/hasillg.gif"></a><a id="thasil" href="scorebindo.php">HASIL</a>
					<ul id="dropdown">
 						<li><a href="scorebindo.php">Bahasa Indonesia</a></li>
						<li><a href="scorematek.php">Matematika</a></li>
						<li><a href="scoreipa.php">Ilmu Pengetahuan Alam</a></li>
		    		</ul>
				</li><br class="enterlogo" />
				
				<!--ACCOUNT-->
				<div id="useratas"><li><img id="lgaccount" src="gambar/user.gif" title="Lgaccount"> <h2 id="username"><?php echo $_SESSION['username']; ?></h2><img id="lgcucuk1" src="gambar/cucuk.gif" title="cucuk">
					<ul>
 						<li><a href="logout.php">Keluar</a></li>
		    		</ul>
				</li></div>

				<div id="usersamping"><li><img id="lgaccount" src="gambar/user.gif" title="Lgaccount"> <h2 id="username"><?php echo $_SESSION['username']; ?></h2><img id="lgcucuk1" src="gambar/cucuk.gif" title="cucuk">
					<ul>
 						<li><a href="logout.php">Keluar</a></li>
		    		</ul>
				</li></div>
				</ul>	
			</nav>
			
			
		</div>
		
			
		</div>
		
		<!-- -->
		<div id="content"><br>
			
			<div id="deskripsi">
				<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelamat datang di website Try Out SD. Website ini bertujuan untuk membantu siswa-siswi Sekolah Dasar untuk mempersiapkan ujian nasional. Website ini juga menyediakan soal-soal ujian tahun-tahun sebelumnya dan akan dikerjakan untuk latihan siswa-siswi sekolah dasar, serta bisa melihat hasil akhir pekerjaan.
				</p><br/>
				<h2 id="kisi-kisi">KISI-KISI</h2>
				<p id="isikisi">
					<?php
						include "koneksi.php";
						$no = 1;
						$sql = mysql_query("SELECT * FROM kisi");
						while ($data = mysql_fetch_assoc($sql)) {
							echo "<a href='kisi/$data[format]'>$no. Tahun Ajaran $data[nama]<br></a>";

							$no++;
						}

					?>
					
				</p>
			</div>
		
		</div>
		
			
	
		<div id="footer">
			<span>created By Cah SD</span>
		</div>
	</div>
</body>
</html>

<?php
$timeout = 1440; // Set timeout minutes
$logout_redirect_url = "index.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
