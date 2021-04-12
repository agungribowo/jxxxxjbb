<?php
// session_start();


// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

require('config/server2.php');

// untuk data add

$nama= $_REQUEST['nama'];
$nip= $_REQUEST['nip'];


$instansi= $_REQUEST['instansi'];
$jabatan= $_REQUEST['jabatan'];
$lokasi= $_REQUEST['lokasi'];

$username_user= $_REQUEST['username_user'];
$password_user = MD5($_REQUEST['password_user']);
// $nama_user= $_REQUEST['nama_user'];



$sql = mysqli_query($koneksidb, "INSERT INTO user (username, password, nip, nama,  jabatan, img_user, level, status_user, instansi,lok_bekerja, register_date)
VALUES('$username_user', '$password_user','$nip', '$nama',  '$jabatan',  'user.png' , 'pelaksana' , 'Disable',   '$instansi',   '$lokasi', NOW())");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=./'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
