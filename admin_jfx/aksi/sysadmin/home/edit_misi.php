<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

// untuk data add
$editor4= $_POST['editor4'];
$id= $_POST['id'];

$sql = mysqli_query($koneksi, "UPDATE jfx_tentang_kami set
	isi = '$editor4'
	 WHERE id='$id'");

if($sql == true){
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=tentang'>";
			die();


		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
