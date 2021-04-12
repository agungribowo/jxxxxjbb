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
 $folder_dokumen = "../../jfx_member/$nama_file_unik";
 move_uploaded_file($lokasi_file,"$folder_dokumen");

$nama_pt= $_POST['nama_pt'];
$url= $_POST['url'];
$tipe_member= $_POST['tipe_member'];
$no_spab= $_POST['no_spab'];
$alamat= $_POST['alamat'];
$email= $_POST['email'];
$telp= $_POST['telp'];
$fax= $_POST['fax'];

$sql = mysqli_query($koneksi, "INSERT INTO jfx_pelaku_pasar (logo, nama_pt, url, tipe_member, no_spab, alamat, email, telp, fax)
      VALUES('$nama_file_unik', '$nama_pt', '$url', '$tipe_member', '$no_spab', '$alamat', '$email', '$telp', '$fax')");

if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=pialang'>";
			die();
		} else {
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
		}
?>
