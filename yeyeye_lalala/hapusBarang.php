<?php
	include "../ngehubungno.php";
	$id = $_GET['id'];
	$qry = mysql_query("DELETE FROM barang_barang where id_barang = '". $id ."'");

	if($qry){
		echo "<script>alert('Sukses');</script>";
		header('location: list_item.php');
	} else {
		echo "<script>alert('gagal menghapus');</script>";
		header('location: list_item.php');
		
	}
?>	