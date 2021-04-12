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

$nomor_kep= $_POST['nomor_kep'];
$perihal= $_POST['perihal'];
$kategori= $_POST['kategori'];


$sql = mysqli_query($koneksi, "INSERT INTO jfx_regulasi (nomor_kep, perihal, tanggal, file, kategori)
      VALUES('$nomor_kep', '$perihal', now(), '$nama_file_unik', '$kategori')"
    );

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=berita_bursa'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
