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
$icon= $_POST['icon'];
$judul= $_POST['judul'];
$deskripsi= $_POST['deskripsi'];



$sql = mysqli_query($koneksi, "INSERT INTO jfx_slide_yellow (icon,   judul  , deskripsi)
											VALUES('$icon','$judul', '$deskripsi' )");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=home'>";
			die();

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
