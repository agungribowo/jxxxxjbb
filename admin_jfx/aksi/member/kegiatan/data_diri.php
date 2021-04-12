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
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik2 = $_POST['nik2'];
$office = $_POST['office'];


$sql = mysqli_query($koneksi, "UPDATE `user` set
	nama = '$nama',
	nik = '$nik2',
  office = '$office'
	 WHERE id='$id'");





if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../member/admin?hlm=edit_profile'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
