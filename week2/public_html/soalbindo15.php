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

	if (isset($_GET['p'])) {
		$page=$_GET['p'];
	}
	else{
		$benar = 0; 
		$page=1;
	}
		$benar;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Try Out SD</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/zoom.css">

	<link href='gambar/topi.gif' rel='shortcut icon' id="topi">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/zoom.js"></script>

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
				<li class="has-sub"><span class="lgcucuksamping"><img class="lgcucuksamping" src="gambar/cucuksamping.gif"></span>
				<a id="tmapel" href="#">MAPEL</a><span class="lgcucuk"><img class="lgcucuk" src="gambar/cucuk.gif" title="Mapel"></span>
			 		<ul id="dropdown">
 						<li><a href="soalbindo15.php ">Bahasa Indonesia</a></li>
						<li><a href="soalmatek15.php ">Matematika</a></li>
						<li><a href="soalipa15.php">Ilmu Pengetahuan Alam</a></li>
		    		</ul>
				</li><br class="enterlogo" />

				<!--HASIL-->
				<li class="has-sub"><a href=""><img id="lghasil" src="gambar/hasillg.gif"></a><a id="thasil" href="scorebindo.php">HASIL</a>
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
			<h3 id="namapel">Bahasa Indonesia</h3><hr>
				<div id="tahun">
				<span id="ingat">! Ingat kerjakan dengan jujur !</span><br/><br/>
				<div id="soal">
			
				<?php
					
					include "koneksi.php";
					$_SESSION['jenis'] = "bindo";
					
								//$limit = 5;
								//$start = $limit*($page-1);

						  		//$no=$start+1;
								$no=1;
						  		$sql = mysql_query("SELECT * from sbindo limit $start, $limit");
						  		$tot   = mysql_query("SELECT * FROM sbindo");
						  		$total = mysql_num_rows($tot);
								//$num_page = ceil($total/$limit);
					//$sql = mysql_query("SELECT * FROM sbindo  ORDER BY RAND() LIMIT 10" );
					
					

					// Kode untuk form
					$no = 0; 
					echo "<form name='form1' method='post' >"; 
					while ($data=mysql_fetch_array($tot)) { 
						$loc = $data['bacaan'];
						$no++; 
						// Kode untuk menampilkan soal 
						//echo"$url_folder_gambar$loc";
						echo "$no. ";
						if($data['perintah'] == ""){

						} else {
							echo" <b>$data[perintah]</b>";	
							echo "<br>";
						}
						if($data['bacaan'] == ""){
							
						}else {
							//echo "$data[bacaan]";
							echo "<br>";
							echo "<img id=$data[no] class='zoomable' onclick='animatee(this.id)' src='$url_folder_gambar$loc' width='40%'/>";
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
					echo "$benar";

						
							
							foreach($RbJawaban as $indeks=>$nilai) {
								$sql = mysql_query("SELECT * FROM sbindo WHERE no='$indeks' limit $start, $limit");
								$data=mysql_fetch_array($sql); 

								if ($data['kunci'] == $nilai) { 
									$benar = $benar + 1; 
								} 
							}
					

						
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