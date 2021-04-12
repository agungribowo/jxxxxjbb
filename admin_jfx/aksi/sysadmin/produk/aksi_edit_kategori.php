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
$id_kategori= $_POST['id_kategori'];
$slug= $_POST['slug'];


$sql = mysqli_query($koneksi, "UPDATE jfx_kategori SET
 kategori='$kategori',
 slug_kategori='$slug'
      WHERE id_kategori ='$id_kategori'");





if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=kategori_produk'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
