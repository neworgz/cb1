<?php
session_start();
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		if (isset($_SESSION['admin'])) {
			header("Location: admin_home.php");
		}elseif (isset($_SESSION['guru'])) {
			header("Location: guru_home.php");
		}else
			header("Location: home.php");
	}
	$pos = "kopet.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Try Out SD</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/validasi.js"></script>
	<link href='gambar/topi.gif' rel='shortcut icon'>
	<script type="text/javascript" src="js/home.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<img src="gambar/logo.gif" title="Try Out SD" class="topi">
			<br class="enter3"/><br class="enter3"/><br class="enter3"/><br class="enter3"/>
			<div id="flogin">
				<br/>
				


				<form method="post" id="login" action=<?php echo '"curl.php?pos='.$pos.'"'; ?>>
				<!--<input id="telepon" name="nomorp"value="" type="text" placeholder="Telepon" required/> <br class="enter3"/>-->
				<input type="hidden" name="return_url" value="">
				<input id="id" name="id"value="" type="text" placeholder="Id atau Telepon" required/> <br class="enter3"/>
				<input id="password" name="password" value="" type="password" placeholder="Kata Kunci" required />
				<br class="enter" /><button id="bmasuk" type="submit">Masuk</button>
				</form>
			</div>
		</div>
		
		<div id="navigation">
			
		</div>
		
		
		<div id="content"><br>
		<br class="enter2" /><br class="enter2" />
			<form id="register" method="post" name="daftar" action="signup.php" onsubmit="return validasi()">
					<h1 id="mendaftar">Mendaftar</h1>
					<input type="text" id="regnama"     name="username" placeholder="Nama" class="validate[required] text-input" /><br>
					<input type="password" id="regpass" name="password" placeholder="Kata Sandi" /><br>
					<input type="password" id="reregpass" name="repassword" placeholder="Masukan Ulang Kata Sandi" /><br>
					<input type="text" id="regphone"    name="nomorp" placeholder="Nomor Ponsel" /><br>
					<input type="text" id="regnisn"     name="nigs" placeholder="NIG/NISN" /><br>
			
					<div><h3>Daftar Sebagai :</h3>
					<select name="regsbg">
					<option value="Pilih salah satu">Pilih salah satu</option>
					<option name="vguru" value="Guru">Guru</option>
					<option name="vsiswa" value="Siswa">Siswa</option>
					</select>
					</div>
					<button  type="submit" id="daftar">Daftar</button>
			</form>
			<img src="gambar/kulino.gif" id="bocah">
			<div id="white"></div>
		</div>
		<!--
		<img src="gambar/bocah-ngomong.gif" id="bocah">
		-->
	
		<div id="footer">
			
		</div>
	</div>
</body>
</html>
