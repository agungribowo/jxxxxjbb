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
$kategori= $_POST['kategori'];
$nama_produk= $_POST['nama_produk'];
$definisi= $_POST['definisi'];
$kode_kontrak= $_POST['kode_kontrak'];
$id_kat_asli= $_POST['id_kat_asli'];



$sql = mysqli_query($koneksi, "UPDATE jfx_produk SET
 id_kategori='$kategori',
 nama_produk='$nama_produk',
 definisi='$definisi',
 kode_kontrak='$kode_kontrak'

      WHERE kode_kontrak ='$id_kat_asli'");





if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=produk'>";
			die();
		} else {
		 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
