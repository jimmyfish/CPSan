<?php
include "../ngehubungno.php";

$id = $_GET['id'];
$query = mysql_query("DELETE FROM testimonials where test_id = '". $id ."'");

if($query){
	header('location:testimonials.php');
}else{
	header('location:testimonials.php');
}
 ?>
