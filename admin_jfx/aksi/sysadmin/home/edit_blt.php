<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

$id= $_POST['id'];
$editor1= $_POST['editor1'];
$judul= $_POST['judul'];
$status= $_POST['status'];

$sql = mysqli_query($koneksi, "UPDATE buletin set
	isi = '$editor1', judul= '$judul', status= '$status', tgl_update = now()
	 WHERE id='$id'");

if($sql == true){
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=buletin'>";
			die();

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
