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
$keg_penyuluhan = $_POST['keg_penyuluhan'];
$id = $_POST['id'];


// $sql = mysqli_query($koneksi, "INSERT INTO agenda (kode_agenda, nama_agenda, ta_agenda, bulan_kegiatan, anggaran, output_agenda, tanggal_agenda, user_agenda) 
// 											VALUES('$kode_agenda', '$nama_agenda', '$ta' ,'$bulan_keg' ,  '$anggaran' ,  '$output_agenda' , now() , '$id_user')");

// UPDATE `agenda` SET `kode_agenda` = '01', `nama_agenda` = 'Pembelian alat tempur 22', `bulan_kegiatan` = 'Febuari', `anggaran` = '645000000', `output_agenda` = '002', `tanggal_agenda` = '2019-09-18' WHERE `agenda`.`id_agenda` = 14;

$sql = mysqli_query($koneksi, "UPDATE `user` set 
	keg_penyuluhan = '$keg_penyuluhan'
	 WHERE id='$id'");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin.php?hlm=edit_profile'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	

