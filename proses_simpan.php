<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
	$kode = null;
	$nama = $_POST['tnama'];
	$tempat = $_POST['ttempat'];
	$tanggal = "1998-06-24";
	/*variabel poto*/
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['fpoto']['name'];
	$ukuran = $_FILES['fpoto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		echo "data gagal disimpan";
	}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['fpoto']['tmp_name'], 'img/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO data_diri VALUES('$kode','$nama','$tempat','$tanggal','$xx')");
		echo "data tersimpan";
		echo "<a href='data_anggota.php'>kembali....</a>";
	}else{
		echo "data gagal disimpan";
	}
}
}
?>
