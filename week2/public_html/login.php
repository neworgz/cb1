<?php //nggocheck login (validasi ro database)
	session_start();
	$id 		= $_POST['id'];
	$nomorp		= $_POST['id'];
	//$nomorp	= $_POST['nomorp'];
	$password 	= $_POST['password'];
	$shapassword    = sha1($password);



	//nggo ukdw
	//header('Location: http://ukdw.ac.id/id/home/do_login');	


	//1
	
	$url = "http://ukdw.ac.id/id/home/do_login";  #GANTI DENGAN URL LOGIN WORDPRESS
	$user = $_POST['id'];     #GANTI DENGAN USERNAME WORDPRESS
	$pass = $_POST['password']; #GANTI DENGAN PASSWORD WORDPRESS
	$redirect = "http://localhost:8080/nggo%20utek/public_html/kopet.php"; #GANTI DENGAN PAGE YANG AKAN DIREDIRECT/DIBUKA SETELAH LOGIN, CONTOH PAGE NEW POST
	$data = "id={$user}&password={$pass}&redirect_to={$redirect}&testcookie=1";

	//$data = "id={$user}&password={$pass}&wp-submit=Log+In&redirect_to={$redirect}&testcookie=1";
	echo $data;
	
	$login=curl_init();
	echo $login;
	
	curl_setopt($login,CURLOPT_COOKIEJAR,"cookie.txt");
	curl_setopt($login,CURLOPT_COOKIEFILE,"cookie.txt");
	curl_setopt($login,CURLOPT_TIMEOUT,80000);
	curl_setopt($login,CURLOPT_RETURNTRANSFER,TRUE);
	curl_setopt($login,CURLOPT_URL,$url);
	curl_setopt($login,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
	curl_setopt($login,CURLOPT_FOLLOWLOCATION,TRUE);
	curl_setopt($login,CURLOPT_AUTOREFERER,TRUE);
	curl_setopt($login,CURLOPT_POST,TRUE);
	curl_setopt($login,CURLOPT_POSTFIELDS,$data);

	$te = curl_exec($login);
	echo $te;
	curl_close($login);


	$result = json_decode($result[1],true);
	echo $result;

	//header('http://localhost:8080/nggo%20utek/public_html/kopet.php');
	

	//2
	/*
	$postData = array(
	    'login' => $_POST['id'],
	    'pwd' => $_POST['password'],
	    'redirect_to' => 'http://youtube.com',
	    'testcookie' => '1'
	);

	curl_setopt_array($ch, array(
	    CURLOPT_URL => 'http://ukdw.ac.id/id/home/do_login',
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_POST => true,
	    CURLOPT_POSTFIELDS => $postData,
	    CURLOPT_FOLLOWLOCATION => true
	));

	$output = curl_exec($ch);
	echo $output;*/
	
?>