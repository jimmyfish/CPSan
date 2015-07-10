<?php
include('ngehubungno.php');
if (isset($_POST['order-baru'])){

	$first = $_POST['first_name'];
	$last = $_POST['last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$pnumber = $_POST['phone_number'];
	$product = $_POST['product_code'];
	$cc = $_POST['cc_number'];


	$input = mysql_query("INSERT INTO ordering VALUES(NULL, '$first', '$last', '$email', '$address', '$pnumber', '$product', '$cc')") or die(mysql_error());

	if ($input){
		echo "<script>window.location = 'success.php'</script>";
	}else{
		echo '<script>window.history.back()</script>';
	}
}

elseif(isset($_POST['add_test'])){
	$fname = $_POST['full_name'];
	$emaile = $_POST['e_mail'];
	$testi = $_POST['testi'];

	$input = mysql_query("INSERT INTO testimonials VALUES(NULL,'$fname','$testi','$emaile')") or die(mysql_error());

	if($input){
		echo "<script>window.location = 'success.php'</script>";
	}else{
		echo '<script>window.history.back()</script>';
	}
}

?>