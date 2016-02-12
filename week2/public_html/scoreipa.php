<?php
session_start();
		if(isset($_SESSION['id']) AND isset($_SESSION['siswa'])){
			$id = $_SESSION['id'];
			$siswa = $_SESSION['siswa'];

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
	<link href='gambar/topi.gif' rel='shortcut icon'>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!--LOGO-->
			<img src="gambar/tryout-hal2.gif" title="Try Out SD"><br class="enterlogo" />
			<span id="menugaris"><img src="gambar/menugaris.gif"  /></span>
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
		
		
		<div id="content"><br>
			<div id="deskripsi">
			<h2 id="hasil">Score<span class="strip">-</span></h2><h5 id="bahasa">Ilmu Pengetahuan Alam</h5>
			<hr/>
			<div class="skor">

				<div id="tabs-1" aria-labelledby="result_tab" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
					<p>Nilai kamu:</p><br/>
					<?php
						include "koneksi.php";

						$query = mysql_query("SELECT * FROM nilai WHERE nis='$_SESSION[nis]' AND mapel='ipa'");
							//jika tidak ada maka
							if (mysql_num_rows($query)==1) {
								$row = mysql_fetch_array ($query);
								$nilai = $row['score'];
							}else{
								$nilai = 0;
							}
					?>

					<div id="eq-number" class=""><?php echo $nilai; ?></div><br/><br/>
					<div id="eq-description" class="">
						<div id="ucapan"><?php 
							if ($nilai < 50) {
								echo "Tidak Lulus";
							}else 
								echo "Lulus";
						?></div>
					</div>
				</div>

			</div>
			</div>
		</div>
		
		<div id="footer">
			<span>created By Cah SD</span>
		</div>
	</div>
</body>
</html>
