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
$nama_unit= $_POST['nama_unit'];
$kode_unit= $_POST['kode_unit'];



$sql = mysqli_query($koneksi, "INSERT INTO unit (id_unit, nama_unit) VALUES('$kode_unit', '$nama_unit')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=unit'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	