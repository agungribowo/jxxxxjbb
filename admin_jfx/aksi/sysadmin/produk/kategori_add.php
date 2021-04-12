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
$slug= $_POST['slug'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_kategori (kategori, slug_kategori)
VALUES('$kategori', '$slug')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=kategori_produk'>";
			die();
		} else {
			echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
