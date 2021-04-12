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
    $id_event = $_REQUEST['kode_event'];


    $sql = mysqli_query($koneksi, "DELETE FROM  revisi_event WHERE   id_event='$id_event'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=jadwal-revisi'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	