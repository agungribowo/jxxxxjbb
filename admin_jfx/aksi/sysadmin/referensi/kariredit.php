<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


require('../../koneksi.php');

// untuk data add
$id= $_POST['id'];
$judul= $_POST['judul'];
$editor1= $_POST['editor1'];
$editor2= $_POST['editor2'];
$gambar= $_POST['gambar'];

 $acak2 = rand(00000,55555);

 // Baca lokasi file sementar dan nama file dari form (fupload)
 $lokasi_file_dokumen = $_FILES['fupload']['tmp_name'];
 $nama_file_dokumen  = $_FILES['fupload']['name'];
 $nama_file_unik  = $acak2.$nama_file_dokumen ;

 $folder_dokumen = "../../file/file_karir/$nama_file_unik";
 move_uploaded_file($lokasi_file_dokumen,"$folder_dokumen");

 if (empty($lokasi_file_dokumen) ){
   $sql = mysqli_query($koneksi, "UPDATE jfx_karir
     SET    judul='$judul', persyaratan='$editor1', deskripsi='$editor2', tanggal=now()
         WHERE id ='$id'");
 } else {
   $sql1 = mysqli_query($koneksi, "SELECT jfx_karir.*
  FROM jfx_karir where id = '$id'
  ");
$row = mysqli_fetch_array($sql1);
unlink("../../file/file_karir/$row[gambar]");

   $sql = mysqli_query($koneksi, "UPDATE jfx_karir
     SET judul='$judul', persyaratan='$editor1', deskripsi='$editor2', gambar= '$nama_file_unik', tanggal=now()
         WHERE id ='$id'");
 }

if($sql == true){
    // header('Location: ./admin.php?hlm=unit');
     echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=karir'>";
    die();
} else {
    echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
}
?>
