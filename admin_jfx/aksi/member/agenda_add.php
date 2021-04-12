<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

require('../../koneksi.php');

// untuk data add
$nama_agenda= $_POST['nama_agenda'];
$kode_agenda= $_POST['kode_agenda'];
$ta= $_POST['ta'];
$petugas_lv= $_SESSION['level'];
$anggaran= $_POST['anggaran'];
$output_agenda= $_POST['output_agenda'];
$id_user= $_POST['id_user'];
$bulan_keg= $_POST['bulan_keg'];



$sql = mysqli_query($koneksi, "INSERT INTO agenda (kode_agenda, nama_agenda, ta_agenda, bulan_kegiatan, anggaran, output_agenda, tanggal_agenda, user_agenda) 
											VALUES('$kode_agenda', '$nama_agenda', '$ta' ,'$bulan_keg' ,  '$anggaran' ,  '$output_agenda' , now() , '$id_user')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin.php?hlm=agenda_kegiatan'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	