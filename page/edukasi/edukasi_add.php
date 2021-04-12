<?php
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

$nama= $_POST['nama'];
$instansi= $_POST['instansi'];
$nik_ktp= $_POST['nik_ktp'];
$alamat= $_POST['alamat'];
$email= $_POST['email'];
$no_telp= $_POST['no_telp'];

$sql = mysqli_query($koneksi, "INSERT INTO jfx_pelatihan_rutin (nama, instansi, nik_ktp, alamat, email, no_telp, tgl_daftar)
      VALUES('$nama', '$instansi', '$nik_ktp', '$alamat', '$email', '$no_telp', now())"
    );

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=./media?hlm=edukasi'>";
			die();
		} else {
			 echo "XXXX";
		}
?>
