<?php
	include "../ngehubungno.php";
	$id = $_GET['id'];
	$qry = mysql_query("DELETE FROM ordering where ordering_id = '". $id ."'");

	if($qry){
		echo "<script>alert('Sukses');</script>";
		header('location: main.php');
	} else {
		echo "<script>alert('gagal menghapus');</script>";
		header('location: main.php');
		
	}
?>	