<?php

$servername = "localhost";
$username = "root";
$pass = "faster";
$db = "ada-system";

$koneksi = mysql_connect($servername, $username, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($db, $koneksi) or die("Tidak ada database yang dipilih!");



