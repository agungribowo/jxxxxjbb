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
$urut= $_POST['urut'];
$kode_kontrak= $_POST['kode_kontrak'];
$modul= $_POST['modul'];
$deskripsi= $_POST['deskripsi'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_spesifikasi_modul (kode_kontrak, urut_modul, modul, deskripsi)
VALUES('$kode_kontrak', '$urut', '$modul', '$deskripsi')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=spek_produk&kode_kontrak=$kode_kontrak'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
