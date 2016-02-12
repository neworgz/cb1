<?php
include"koneksi.php";
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
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<title>Try Out SD</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/zoom.css">

	<link href='gambar/topi.gif' rel='shortcut icon' id="topi">
	

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
			<h3 id="namapel">Ilmu Pengetahuan Alam</h3><hr>
				<div id="tahun">
				<span id="ingat">! Ingat kerjakan dengan jujur !</span><br/><br/>
				<div id="soal">
			
				<?php
					//$sql="";
					include "koneksi.php";
					$_SESSION['jenis'] = "ipa";
					
					$sql = mysql_query("SELECT * FROM sipa ORDER BY RAND()" );
					
					

					// Kode untuk form
					$no = 0; 
					echo "<form name='form1' method='post' action='prosesnilai.php'>"; 
					while ($data=mysql_fetch_array($sql)) { 
						$loc = $data['bacaan'];
						$no++; 
						// Kode untuk menampilkan soal 
						
						echo "$no. <b>$data[perintah]</b>";	if($data['perintah'] == ""){} else echo "<br><br>";
						if($data['bacaan'] == ""){
							
						}else {
							//echo "$data[bacaan]";

							echo "<img id=$data[no] class='zoomable' onclick='animatee(this.id)' src='$url_folder_gambar$loc' width='40%'/>";
							
							
    						//<?php 
							echo "<br><br>";
						}
						echo "$data[pertanyaan] <br>"; 
					
							echo "<span class='pilihan'>";echo "A.<input type='radio' value='A' name='RbJawaban[$data[no]]'>"; 
						echo "$data[jawab_a] <br>"; 
							echo "<span class='pilihan'>";echo "B.<input type='radio' value='B' name='RbJawaban[$data[no]]'>"; 
						echo "$data[jawab_b] <br>"; 
							echo "<span class='pilihan'>";echo "C.<input type='radio' value='C' name='RbJawaban[$data[no]]'>"; 
						echo "$data[jawab_c] <br>"; 
							echo "<span class='pilihan'>";echo "D.<input type='radio' value='D' name='RbJawaban[$data[no]]'>"; 
						echo "$data[jawab_d] <br><br>"; 
						echo "</span>";
						
					}					
					// Kode untuk tombol 
					echo "<input type='submit' name='Submit' value='Jawab'>"; echo "</form>"; 
				
				?></div>

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