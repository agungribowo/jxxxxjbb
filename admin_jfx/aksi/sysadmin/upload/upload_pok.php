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
$judul= $_POST['judul'];
$bulan= $_POST['bulan'];
$ta= $_POST['ta'];
$id_user= $_POST['id_user'];
$revisi= $_POST['revisi'];



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../../file/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");




// $targetfolder = "../../file/";
//  $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
// $file_type=$_FILES['file']['type'];
// $nama_foto = $_FILES['file']['name'];


// if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="application/s19" ) {
//  if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
//  {
//  echo "File Berhasil di Upload  file ". basename( $_FILES['file']['name']). " is uploaded";
//  }
//  else {
//  echo "File Gagal di Upload";
//  }
// }
// else {
//  echo "Hanya Boleh upload PDF, JPEG GIF .<br>";
// }



if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  






$sql = mysqli_query($koneksi, "INSERT INTO upload_pok (judul_pok, pok, bulan_anggaran, ta, revisi, petugas, tgl_upload) 
											VALUES('$judul','$nama_file', '$bulan', '$ta' ,  '$revisi' ,  '$id_user' , now() )");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=Upload-POK'>";
			die();
			
			}

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	