<?php

if (empty($_SESSION)){
	session_start();
}
$error='';

include "../ngehubungno.php";

if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}else{
		$usernamet = $_POST['username'];
		$passwot = md5($_POST['password']);
		
		$connection = mysql_connect("localhost", "root", "faster");

		$db = mysql_select_db("ada-system", $connection);
		$usernamet = stripslashes($usernamet);
		$passwot = stripslashes($passwot);
		$usernamet = mysql_real_escape_string($usernamet);
		$passwot = mysql_real_escape_string($passwot);

		$query = mysql_query("select * from arek where password='$passwot' AND username='$usernamet'", $connection);

		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$usernamet; // Membuat Sesi/session
				header("location: main.php"); // Mengarahkan ke halaman profil
				} else {
					echo "<script>alert('Password Atau username Salah');</script>";
				}
				mysql_close($connection); // Menutup koneksi
	}
}

elseif(isset($_POST['hapus'])){
	$conek = mysql_connect("localhost", "root", "faster");

	$db = mysql_select_db("ada-system", $conek);
	$keri = mysql_query("delete from ordering where ordering_id='".$_GET['ordering_id']."';", $conek);

	$rows = mysql_num_rows($keri);

	if($rows == 1){
		echo "<script>alert('fakk');</script>";
	} else {
		echo "<script>alert('failed');</script>";
	}
}

elseif(isset($_POST['masukBarang'])){
	$conek = mysql_connect("localhost","root","faster");
	$db = mysql_select_db("ada-system",$conek);

	$namabarang = $_POST['nama-barang'];
	$deskripsi = $_POST['deskripsi-barang'];
	$harga = $_POST['harga-barang'];
	$prevbarang = $_FILES['preview']['name'];
	date_default_timezone_set('Asia/Jakarta');
	$tanggal = time("hhmmss");
	$kiri = substr($prevbarang,0,2);
	$barang_size = $_FILES['preview']['size'];

		if($barang_size<512000){
			include "../ngehubungno.php";
					$eskiel = "insert into barang_barang set nama_barang='$namabarang', deskripsi='$deskripsi', harga_barang='$harga', preview_barang='img/product/$tanggal$kiri'";
					$kueri = mysql_query($eskiel) or die(mysql_error());
					move_uploaded_file($_FILES['preview']['tmp_name'], "../img/product/".$tanggal.$kiri);

				header("location:list_item.php");
		}else{
			echo "<script>alert('Error Size, the size must be below then 500kB')</script>";
		}
		

}

elseif(isset($_POST['ubahBarang'])){

	$namabarang = $_POST['nama-barang'];
	$deskripsi = $_POST['deskripsi-barang'];
	$harga = $_POST['harga-barang'];
	$prevbarang = $_FILES['previewnew']['name'];
	date_default_timezone_set('Asia/Jakarta');
	$tanggal = time("hhmmss");
	$kiri = substr($prevbarang,0,2);
	$brg = $_POST['aidi-barang'];
	$xx = "cok";
	echo "string".$xx;

						//$es = "update barang_barang set nama_barang='$namabarang', deskripsi='$deskripsi', harga_barang='$harga' where id_barang='$brg'";
						//$kueri = mysql_query($es) or die(mysql_error());
						// move_uploaded_file($_FILES['previewnew']['tmp_name'], "../img/product/".$tanggal.$kiri);

					//header("location:list_item.php");
}