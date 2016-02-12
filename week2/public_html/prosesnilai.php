<html> 
<head> 
	<title>Hasil jawaban kuis</title> </head>
<body>
<?php
include "koneksi.php";
session_start();
$nis = $_SESSION['nis']; 

$RbJawaban = $_REQUEST['RbJawaban'];

	if ($_SESSION['jenis'] == "bindo") {
				if (! count($RbJawaban) >=1) {
				include "soalbindo15.php"; 
		 		echo "<script>alert('Anda belum menjawab satu soal pun.'); </script>";		
		 		exit; 
			}
			$benar = 0; 

			foreach($RbJawaban as $indeks=>$nilai) {
				$sql = mysql_query("SELECT * FROM sbindo WHERE no='$indeks'");
				$data=mysql_fetch_array($sql); 

				if ($data['kunci'] == $nilai) { 
					$benar = $benar + 1; 
				} 
			}
			//$tahun = $_SESSION['tahun'];
			//$sql_jum = mysql_query("SELECT COUNT(*) FROM sbindo WHERE tahun='2015'"); 
			
			//$data_jum= mysql_fetch_row($sql_jum);
			//$jumlah= $data_jum[0];
			$salah = $jumlah - $benar;
			$persen_benar = round(($benar/$jumlah)*100);
			$persen_salah = round(($salah/$jumlah)*100);
			$_SESSION['nilai'] = "$persen_benar";

			$query = mysql_query("SELECT * FROM nilai WHERE nis='$_SESSION[nis]' AND mapel='bindo'");
			//jika tidak ada maka
			if (mysql_num_rows($query)==1) {
				$query		=mysql_query("UPDATE nilai SET score='$_SESSION[nilai]' WHERE nis='$_SESSION[nis]' AND mapel='bindo' ");
			}else{
				$query		=mysql_query("INSERT into nilai(nis,mapel,score) values ('$_SESSION[nis]', 'bindo', '$_SESSION[nilai]')");
			}
			
			//echo  $_SESSION['nilai'] ;
			header("Location: scorebindo.php");
	}elseif($_SESSION['jenis'] == "matek") {
			if (! count($RbJawaban) >=1) {
					include "soalmatek15.php"; 
			 		echo "<script>alert('Anda belum menjawab satu soal pun.'); </script>";		
			 		exit; 
				}
				$benar = 0; 

				foreach($RbJawaban as $indeks=>$nilai) {
					$sql = mysql_query("SELECT * FROM smtk WHERE no='$indeks'");
					$data=mysql_fetch_array($sql); 

					if ($data['kunci'] == $nilai) { 
						$benar = $benar + 1; 
					} 
				}
				$tahun = $_SESSION['tahun'];
				$sql_jum = mysql_query("SELECT COUNT(*) FROM smtk"); 
				
				$data_jum= mysql_fetch_row($sql_jum);
				$jumlah= $data_jum[0];
				$salah = $jumlah - $benar;
				$persen_benar = round(($benar/$jumlah)*100,2);
				$persen_salah = round(($salah/$jumlah)*100,2);
				$_SESSION['nilai'] = "$persen_benar";

				$query = mysql_query("SELECT * FROM nilai WHERE nis='$_SESSION[nis]' AND mapel='bindo'");
				//jika tidak ada maka
				if (mysql_num_rows($query)==1) {
					$query		=mysql_query("UPDATE nilai SET score='$_SESSION[nilai]' WHERE nis='$_SESSION[nis]' AND mapel='mtk' ");
				}else{
					$query		=mysql_query("INSERT into nilai(nis,mapel,score) values ('$_SESSION[nis]', 'mtk', '$_SESSION[nilai]')");
				}

				//echo  $_SESSION['nilai'] ;
				header("Location: scorematek.php");
	}else{
				if (! count($RbJawaban) >=1) {
						include "soalipa.php"; 
				 		echo "<script>alert('Anda belum menjawab satu soal pun.'); </script>";		
				 		exit; 
					}
					$benar = 0; 

					foreach($RbJawaban as $indeks=>$nilai) {
						$sql = mysql_query("SELECT * FROM sipa WHERE no='$indeks'");
						$data=mysql_fetch_array($sql); 

						if ($data['kunci'] == $nilai) { 
							$benar = $benar + 1; 
						} 
					}
					$tahun = $_SESSION['tahun'];
					$sql_jum = mysql_query("SELECT COUNT(*) FROM sipa"); 
					
					$data_jum= mysql_fetch_row($sql_jum);
					$jumlah= $data_jum[0];
					$salah = $jumlah - $benar;
					$persen_benar = round(($benar/$jumlah)*100,2);
					$persen_salah = round(($salah/$jumlah)*100,2);
					$_SESSION['nilai'] = "$persen_benar";


					$query = mysql_query("SELECT * FROM nilai WHERE nis='$_SESSION[nis]' AND mapel='bindo'");
					//jika tidak ada maka
					if (mysql_num_rows($query)==1) {
						$query		=mysql_query("UPDATE nilai SET score='$_SESSION[nilai]' WHERE nis='$_SESSION[nis]' AND mapel='ipa' ");
					}else{
						$query		=mysql_query("INSERT into nilai(nis,mapel,score) values ('$_SESSION[nis]', 'ipa', '$_SESSION[nilai]')");
					}

					//echo  $_SESSION['nilai'] ;
					header("Location: scorebindo.php");
	}	

	
?>
</body>
</html>