<?php
 if($_SESSION['level']=="")
  header('Location: ./');

require('../../koneksi.php');

// untuk data add
$acak1 = rand(0000,9999);

// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
 $nama_file_unik  = $acak1.$nama_file ;

 // Tentukan folder untuk menyimpan file
 $folder_dokumen = "../../file_regulasi/$nama_file_unik";
 move_uploaded_file($lokasi_file,"$folder_dokumen");

$judul= $_POST['judul'];
$deskripsi= $_POST['deskripsi'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_materi (judul, deskripsi, tgl_update, file_materi)
      VALUES('$judul', '$deskripsi', now(), '$nama_file_unik')"
    );

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=materi_umum'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
