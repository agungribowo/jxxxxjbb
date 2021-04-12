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
$id_spek= $_REQUEST['id_spek'];
$kode_kontrak= $_REQUEST['kode_kontrak'];
$urut= $_POST['urut'];
$modul= $_POST['modul'];
$deskripsi= $_POST['deskripsi'];



$sql = mysqli_query($koneksi, "UPDATE jfx_spesifikasi_modul SET
 urut_modul='$urut',
 modul='$modul',
 deskripsi='$deskripsi'

      WHERE id_spek ='$id_spek'");





if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=spek_produk&kode_kontrak=$kode_kontrak'>";
			die();
		} else {
		 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
