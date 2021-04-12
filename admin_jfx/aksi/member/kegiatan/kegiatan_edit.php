<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


// $username = $_SESSION['username'];
// $nama = $_SESSION['nama'];
// $jabatan = $_SESSION['jabatan'];
// $id_admin = $_SESSION['id'];

require('../../koneksi.php');

  $kode = $_REQUEST['Kode'];
 $sql = mysqli_query($koneksi, "SELECT agenda.*
        FROM agenda WHERE id_agenda='$kode'
        ");
 $row = mysqli_fetch_array($sql);

echo "$kode";

// untuk data add
$id_agenda = $_REQUEST['id_agenda'];
$nama_agenda= $_POST['nama_agenda'];
$kode_kegiatan= $_POST['kode_kegiatan'];
$ta= $_POST['ta'];
$petugas_lv= $_SESSION['level'];
$anggaran= $_POST['anggaran'];
$output_agenda= $_POST['output_agenda'];
$id_user= $_POST['id_user'];
$bulan_keg= $_POST['bulan_keg'];



// $sql = mysqli_query($koneksi, "INSERT INTO agenda (kode_agenda, nama_agenda, ta_agenda, bulan_kegiatan, anggaran, output_agenda, tanggal_agenda, user_agenda) 
// 											VALUES('$kode_agenda', '$nama_agenda', '$ta' ,'$bulan_keg' ,  '$anggaran' ,  '$output_agenda' , now() , '$id_user')");

// UPDATE `agenda` SET `kode_agenda` = '01', `nama_agenda` = 'Pembelian alat tempur 22', `bulan_kegiatan` = 'Febuari', `anggaran` = '645000000', `output_agenda` = '002', `tanggal_agenda` = '2019-09-18' WHERE `agenda`.`id_agenda` = 14;

$sql = mysqli_query($koneksi, "UPDATE `agenda` set 
	kode_agenda = '$kode_kegiatan', 
	nama_agenda = '$nama_agenda',
	ta_agenda = '$ta',
	bulan_kegiatan = '$bulan_keg', 
	anggaran = '$anggaran',
	output_agenda = '$output_agenda', 
	tanggal_agenda = now(),
	user_agenda = '$id_user' 
	 WHERE agenda.id_agenda='$kode'");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin.php?hlm=agenda_kegiatan'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	

