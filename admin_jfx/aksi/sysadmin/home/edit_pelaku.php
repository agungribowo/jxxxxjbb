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
$tipe_member = $_POST['tipe_member'];
$nama_pt = $_POST['nama_pt'];
$no_spab = $_POST['no_spab'];
$telp = $_POST['telp'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$url = $_POST['url'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi, "UPDATE jfx_pelaku_pasar SET
 tipe_member='$tipe_member', nama_pt='$nama_pt', no_spab='$no_spab', telp='$telp',
 fax='$fax', email='$email', url='$url', alamat='$alamat'
      WHERE id ='$id'");


if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=pialang'>";
			die();
		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
