<?php
// session_start();


// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

// require('config/server2.php');
require '../koneksi.php';

// untuk data add

$nama= $_REQUEST['nama'];
$nip= $_REQUEST['nip'];


$instansi= $_REQUEST['instansi'];
$jabatan= $_REQUEST['jabatan'];
$lokasi= $_REQUEST['lokasi'];

$username_user= $_REQUEST['username_user'];
$password_user = MD5($_REQUEST['password_user']);
// $nama_user= $_REQUEST['nama_user'];


 $sql3 = mysqli_query($koneksi, "SELECT master.*
        FROM master 
        where kabupaten = '$lokasi'
        
        ");
    $myData = mysqli_fetch_array($sql3);
$prov = $myData['provinsi'];


$sql = mysqli_query($koneksi, "INSERT INTO user (username, password, nip, nama, img_user, level, status_user, register_date)
VALUES('$username_user', '$password_user','$nip', '$nama', '1651download.png' , 'pelaksana' , 'Disable',  NOW())");



$sql2 = mysqli_query($koneksi, "INSERT INTO petugas_pbj (nip, nama,instansi, jabatan,kabupaten, provinsi)
VALUES('$nip', '$nama',   '$instansi', '$jabatan',   '$lokasi','$prov')");



if($sql2 == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=./terima_kasih.php'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
