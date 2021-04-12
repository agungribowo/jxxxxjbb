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

    $sql1 = mysqli_query($koneksi, "SELECT foto_keg.*
       FROM foto_keg

 WHERE id_foto='$id'");


$data = mysqli_fetch_array($sql1);

$foto = $data['foto'];
unlink("../../file_foto/".$foto);


    $sql = mysqli_query($koneksi, "DELETE FROM foto_keg WHERE id_foto='$id'");
    if($sql == true){
             echo "<meta http-equiv='refresh' content='0;  URL=../pelaksana/admin?hlm=foto_kegiatan'>";
        die();
    } else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	