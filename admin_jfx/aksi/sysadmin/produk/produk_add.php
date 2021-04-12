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
$kode_kontrak= $_POST['kode_kontrak'];
$kategori= $_POST['kategori'];
$nama_produk= $_POST['nama_produk'];
$nama_produk_slug= $_POST['nama_produk_slug'];
$definisi= $_POST['definisi'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_produk (kode_kontrak, id_kategori, nama_produk, slug_produk, definisi)
VALUES('$kode_kontrak', '$kategori', '$nama_produk', '$nama_produk_slug', '$definisi')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=produk'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
