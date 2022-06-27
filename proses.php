<?php
include "config.inc.php";

	$nim=$_POST['nim'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$prodi=$_POST['prodi'];

	
	$sql="INSERT INTO ms_mhs VALUES('$nim','$nama_lengkap','$jk','$agama','$alamat','$prodi')";

	$hasil= mysqli_query($conn,$sql);

	if($hasil){
		header("location: index.php");
	}
	else{
		echo 'Maaf, terjadi kesalahan !!!';
	}

?>