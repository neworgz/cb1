<?php
		$homeDir = $_GET['pos'];
		echo $homeDir;
		$curl = curl_init();
		$nim = $_POST['id'];
		$password = $_POST['password'];
		curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => "http://ukdw.ac.id/id/home/do_login",
				CURLOPT_POST => 1,
				CURLOPT_HTTPAUTH => CURLAUTH_ANY,
				CURLOPT_REFERER=> "http://ukdw.ac.id/id/home/login",
				CURLOPT_HTTPHEADER => array("POST id/home/login HTTP/1.0"),
				CURLOPT_COOKIEJAR => "cookie.txt",
				CURLOPT_TIMEOUT => 60,
				
				CURLOPT_POSTFIELDS => "return_value=&id=" . $nim . "&password=" . $password
			));	
		
		$hasil = curl_exec($curl);
		$url = curl_getinfo($curl, CURLINFO_REDIRECT_URL);
		$html = htmlentities($hasil,ENT_IGNORE);
		
		echo $html;
		

		if($url=="http://ukdw.ac.id/portal"){
			echo "login berhasil";
			echo $homeDir;
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => "http://ukdw.ac.id/id/home/do_login",
				CURLOPT_POST => 1,
				CURLOPT_HTTPAUTH => CURLAUTH_ANY,
				CURLOPT_REFERER=> "http://ukdw.ac.id/id/home/login",
				CURLOPT_HTTPHEADER => array("POST id/home/login HTTP/1.0"),
				CURLOPT_COOKIEJAR => "cookie.txt",
				CURLOPT_TIMEOUT => 30,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_POSTFIELDS => "return_value=&id=" . $nim . "&password=" . $password
			));	
			$hasil = curl_exec($curl);
			$startChop = '2><a href="http://ukdw.ac.id/portal/profil/mahasiswa/' . $nim . '">';
			$endChop = '</a></h2>';
			$startName = stripos($hasil, $startChop);
			$endName = stripos($hasil, $endChop);
			$nama = substr(substr($hasil, $startName, $endName-$startName),63);
			session_start();
			$_SESSION['user']=$nama;
			header("location:".$homeDir);
		}else{
			header("location:index.php");
		}

		curl_close($curl);
 ?>