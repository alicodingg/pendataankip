<?php  
$con = mysqli_connect("localhost", "root", "", "kipkrpl");
if (!$con) {
	echo 'Koneksi gagal ' . mysqli_error();
}
?>