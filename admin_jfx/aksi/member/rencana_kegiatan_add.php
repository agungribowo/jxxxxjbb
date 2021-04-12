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
$no_surat= $_POST['no_surat'];
$nama_agenda= $_POST['nama_kegiatan'];
$tgl_kegiatan= $_POST['tgl_kegiatan'];
$tgl_akhir = $_POST['tgl_akhir'];
$rak= $_POST['rak'];
$editor3= $_POST['editor3'];
$editor2= $_POST['editor2'];
$editor1= $_POST['editor1'];
$id_user= $_POST['id_user'];



$sql = mysqli_query($koneksi, "INSERT INTO sprint (no_surat, nama_kegiatan, tgl_awal, tgl_akhir, rencana_anggaran, menimbang, dasar, untuk, user_petugas, waktu_buat) 
											VALUES('$no_surat', '$nama_agenda', '$tgl_kegiatan' ,'$tgl_akhir' ,  '$rak' ,  '$editor3' , '$editor1' , '$editor2', '$id_user', now())");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin.php?hlm=agenda_kegiatan'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	