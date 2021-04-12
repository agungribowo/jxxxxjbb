<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

// untuk data add
$editor2= $_POST['editor2'];
$id= $_POST['id'];

$sql = mysqli_query($koneksi, "UPDATE jfx_tentang_kami set
	isi = '$editor2'
	 WHERE id='$id'");

if($sql == true){
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=tentang'>";
			die();


		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
