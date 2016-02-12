<?php
include("koneksi.php");
session_start();
	if(isset($_SESSION['id']) AND isset($_SESSION['admin'])){
		$id = $_SESSION['id'];
	}
	else{	
		if(isset($_POST['id']) AND isset($_POST['password']) AND isset($_SESSION['admin']) ){
			$_SESSION['id'] = $_POST['id'];
			$id = $_SESSION['id'];
		}
		else {
			header("Location: index.php");
		}
	}

	if (isset($_GET['p'])) {
		$page=$_GET['p'];
	}
	else
		$page=1;

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
					<a href="admin_home.php"><img id="lghome" src="gambar/homelg.png" title="Home"></a><a id="thome" href="admin_home.php">HOME</a>
				</li><br class="enterlogo" />
				<!-- MAPEL-->
				<li><span class="lgcucuksamping"><img class="lgcucuksamping" src="gambar/cucuksamping.gif"></span>
				<a id="tmapel" href="#">MAPEL</a><span class="lgcucuk"><img class="lgcucuk" src="gambar/cucuk.gif" title="Mapel"></span>
			 		<ul id="dropdown">
 						<li><a href="admin_mapelbindo.php">Bahasa Indonesia</a></li>
						<li><a href="admin_mapelmtk.php">Matematika</a></li>
						<li><a href="admin_mapelipa.php">Ilmu Pengetahuan Alam</a></li>
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
			<h3 id="namapel" style="display:inline;">Bahasa Indonesia</h3>
			<?php 
			$_SESSION['mapel'] = 'Bahasa Indonesia';
			$_SESSION['jenis'] = 'bindo';
			?>

			<a href="tambahSoal.php"><button action="tambahSoal.php" name="tambahsoal" id="butambah" >Tambah Soal</button></a>
			<hr>
				<div id="tahun">
					<!--<span id="ingat">! Ingat kerjakan dengan jujur !</span><br/><br/>-->
					<table border="1px" class="tabel">
					  	<thead>
					  		<tr>
					  			<td id="no" class="center">No</td>
					  			<td id="pertanyaan">Pertanyaan</td>
					  			<td >Kunci Jawaban</td>
					  			<td class="center">Opsi</td>

					  		</tr>
				  		</thead>
					  	<tbody>
					  		<?php
						  		$limit = 5;
								$start = $limit*($page-1);

						  		$no=$start+1;
						  		$query = mysql_query("SELECT * from sbindo limit $start, $limit");
						  		$tot   = mysql_query("SELECT * FROM sbindo");
						  		$total = mysql_num_rows($tot);
								$num_page = ceil($total/$limit);

								while ($data = mysql_fetch_assoc($query)) {
										
										$_SESSION ['jenis'] = "bindo"; 
										echo "<tr>";
										echo "<td class='center'>". $no."</td>";
										echo "<td>". $data['pertanyaan']."</td>";
										echo "<td class='center' id='kunci'>". $data['kunci']."</td>";
										echo "<td class='center'><a href='delete.php?id=$data[no]'><input onclick='return deleletconfig()' id='buthapus' type='button' name='hapus' value='Hapus'></a></td>";
										echo "</tr>";

										$no=$no+1;	
								}

								
							?>
						</tbody>
					</table>
				
					<div class="pagina"><?php

						function pagination($page, $num_page){
							echo "<ul style='list-style-type:none;'>";
							for($i=1; $i<=$num_page; $i++){
								if ($i == $page) {
									echo "<li style='float:left;padding:5px; background:#D0ECED;text-decoration:none;'>".$i."</li>";
								}else{
									echo '<li style="float:left;padding:5px;text-decoration:none;"><a href="admin_mapelbindo.php?p= '.$i.' ">'.$i.'</a></li>';
								}
							}
							echo "</ul>";
						}

						if ($num_page>1) {
							pagination($page,$num_page);
						}
					?>
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
