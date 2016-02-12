<?php
include"koneksi.php";
session_start();
	if(isset($_SESSION['id']) OR isset($_SESSION['guru']) OR isset($_SESSION['admin'])){
		$id = $_SESSION['id'];
	}
	else{	
		header("Location: index.php");
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
					<?php 
					if (isset($_SESSION['admin'])) {
						echo "<a href='admin_home.php'><img id='lghome' src='gambar/homelg.png' title='Home'></a><a id='thome' href='admin_home.php'>HOME</a>";
					}else{
						echo "<a href='guru_home.php'><img id='lghome' src='gambar/homelg.png' title='Home'></a><a id='thome' href='guru_home.php'>HOME</a>";
					}

					?>
					
				</li><br class="enterlogo" />
				<!-- MAPEL-->
				<li><span class="lgcucuksamping"><img class="lgcucuksamping" src="gambar/cucuksamping.gif"></span>
				<a id="tmapel" href="#">MAPEL</a><span class="lgcucuk"><img class="lgcucuk" src="gambar/cucuk.gif" title="Mapel"></span>
			 		<ul id="dropdown">
			 			<?php 
			 				if (isset($_SESSION['admin'])) {
			 					echo "<li><a href='admin_mapelbindo.php'>Bahasa Indonesia</a></li>";
								echo "<li><a href='admin_mapelmtk.php'>Matematika</a></li>";
								echo "<li><a href='admin_mapelipa.php'>Ilmu Pengetahuan Alam</a></li>";
			 				}else{
			 					echo "<li><a href='guru_mapelbindo.php'>Bahasa Indonesia</a></li>";
								echo "<li><a href='guru_mapelmtk.php'>Matematika</a></li>";
								echo "<li><a href='guru_mapelipa.php'>Ilmu Pengetahuan Alam</a></li>";
			 				}

			 			?>
 					</ul>
				</li><br class="enterlogo" />

				<!--ACCOUNT-->
				<li id="useratas"><img id="lgaccount" src="gambar/user.gif" title="Lgaccount"> <h2 id="username"><?php echo $_SESSION['username']; ?></h2><img id="lgcucuk1" src="gambar/cucuk.gif" title="cucuk">
					<ul>
 						<li><a href="logout.php">Keluar</a></li>
		    		</ul>
				</li>
				</ul>	
			</nav>
			
			
		</div>
		
			
		</div>
		
		<!-- -->
		<div id="content"><br>
			
			<div id="deskripsi">
				<!--ambil nama mapel dari session-->

				<h3 id="namapel"><?php echo $_SESSION['mapel'];?></h3><hr>
				<form id="soal" enctype="multipart/form-data" method="post" action="upload.php">
						Masukan soal serta jawaban pada kotak yang disediakan
						<br><br><input type="text" name="perintah" placeholder="Masukan perintah Soal">		
						<br>
						<br><label>Lampiran Soal</label>
						<!--<input type="text" 	   name="bacaan" placeholder="Nama Gambar Lampiran Soal">-->
						<input type="file"     name="userfile" size="40"  />
						<br><input type="text" name="pertanyaan" placeholder="Pertanyaan">
						<br><input type="text" name="jawab_a" placeholder="jawab_a">
						<br><input type="text" name="jawab_b" placeholder="jawab_b">
						<br><input type="text" name="jawab_c" placeholder="jawab_c">
						<br><input type="text" name="jawab_d" placeholder="jawab_d">
						<br><input type="text" name="kunci" placeholder="Kunci"><br>
						<input type="submit" value="Kumpulkan Soal">

				</form>
			</div>
		
		</div>
		
			
	
		<div id="footer">
			<span>created By Cah SD</span>
		</div>
	</div>
</body>
</html>
