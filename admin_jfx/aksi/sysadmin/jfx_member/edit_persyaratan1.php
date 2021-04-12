<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

// untuk data add
$editor1= $_POST['editor1'];
$id= $_POST['id'];

$sql = mysqli_query($koneksi, "UPDATE jfx_persyaratan set
	isi = '$editor1'
	 WHERE id='$id'");

if($sql == true){
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=persyaratan'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
