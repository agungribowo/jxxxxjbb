<?php 
$koneksidb = mysqli_connect("localhost","root","","pbj3");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>