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
    $id = $_REQUEST['id'];

    $sql1 = mysqli_query($koneksi, "SELECT buletin.*
       FROM buletin

 WHERE id='$id'");


$data = mysqli_fetch_array($sql1);

$foto = $data['gambar'];
unlink("../../file_buletin/".$foto);


    $sql = mysqli_query($koneksi, "DELETE FROM buletin WHERE id='$id'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=buletin'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	