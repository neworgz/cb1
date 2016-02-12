<?php
	include("koneksi.php");
	session_start();

	$id = $_GET['id'];

	if ($_SESSION['jenis']== "bindo") {
		$query = mysql_query("DELETE from sbindo WHERE no = '$id'");
		header("Location: admin_mapelbindo.php");
		//echo $id;
	}
	elseif ($_SESSION['jenis']== "mtk") {
		$query = mysql_query("DELETE from smtk WHERE no = '$id'");
		header("Location: admin_mapelmtk.php");
	}
	else{
		$query = mysql_query("DELETE from sipa WHERE no = '$id'");
		header("Location: admin_mapelipa.php");
	}

?>
