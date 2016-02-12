<?php
include "koneksi.php";


				$nama 		= $_POST['username'];
				$password 	= $_POST['password'];
				$nomorp	= $_POST['nomorp'];
				$nigs 		= $_POST['nigs'];
				$shapassword    = sha1($password);
				$userkey = "2obac0";
				$passkey = "kopetg@ring";
				$pesan   = "Terima telah mendaftar TryOut CAH SD \nNama: ".$nama. "\nId:";
				$id	  =  "";

				 if ($_POST['regsbg'] == "Guru") {
				 	$query		="insert into guru(nama,password,nomorp,nig) values ('$nama', '$shapassword', '$nomorp', '$nigs')";
				 }elseif ($_POST['regsbg'] == "Siswa") {
				 	$query		="insert into siswa(nama,password,nomorp,nis) values ('$nama', '$shapassword', '$nomorp', '$nigs')";
				 }
			
			
				
				 if(mysql_query($query)){

						$query=mysql_query("SELECT * FROM guru WHERE nomorp='$nomorp' and password='$shapassword'");
						if(mysql_num_rows($query)==1){
							$row = mysql_fetch_array ($query);
							$id  = $row['id']; 
 							
						}else{
							$query=mysql_query("SELECT * FROM siswa WHERE nomorp='$nomorp' and password='$shapassword'");
							if(mysql_num_rows($query)==1){
								$row = mysql_fetch_array ($query);
								$id  = $row['id'];							}
						}

					//$url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=" .$userkey. "&passkey=" .$passkey. "&nohp=" .$nomorp. "&pesan=" .$pesan." ".$id. "\nPassword: ".$password."\nGunakan Id dan juga password untuk login" ;
					//$bacaxml = simplexml_load_file($url);
									
					echo("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('Silakan Cek HP anda')
   					window.location.href='index.php';
    					</SCRIPT>");
				 }else{
				  	header('Location: index.php');
				 }
					

?>