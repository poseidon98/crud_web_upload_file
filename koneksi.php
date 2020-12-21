<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "upload_file";

$koneksi = new Mysqli($servername,$username,$password,$database);
if ($koneksi->connect_error) {
	die("koneksi Gagal: " . $koneksi->connect_error);
}/*else{
	echo 'Berhasil konek';
}*/
?>