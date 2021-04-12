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
    $id_revisi = $_REQUEST['id_revisi'];


    $sql = mysqli_query($koneksi, "DELETE FROM surat_revisi WHERE   id_revisi='$id_revisi'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=verifikasi'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	