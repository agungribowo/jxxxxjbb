<?php
// session_start();
if($_SESSION['level']=="")
  header('Location: ./');

// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
require('../../koneksi.php');
// untuk data add
$judul= $_POST['judul'];
$awal= $_POST['awal'];
$akhir= $_POST['akhir'];
$id_user= $_POST['id_user'];
$anaksatker= $_POST['anaksatker'];


$sql = mysqli_query($koneksi, "INSERT INTO revisi_event (title, satker, start, end, petugas, jdwl_input) VALUES('$judul','$anaksatker', '$awal',  '$akhir',  '$id_user', now())");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=jadwal-revisi'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	