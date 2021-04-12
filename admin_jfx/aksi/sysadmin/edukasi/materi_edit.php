<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


require('../../koneksi.php');

// untuk data add
$id= $_POST['id'];
$judul= $_POST['judul'];
$deskripsi= $_POST['deskripsi'];
$file_materi= $_POST['$file_materi'];

 $acak2 = rand(00000,55555);

 // Baca lokasi file sementar dan nama file dari form (fupload)
 $lokasi_file_dokumen = $_FILES['file_materi']['tmp_name'];
 $nama_file_dokumen  = $_FILES['file_materi']['name'];
 $nama_file_unik  = $acak2.$nama_file_dokumen ;

 $folder_dokumen = "../../file_materi/$nama_file_unik";
 move_uploaded_file($lokasi_file_dokumen,"$folder_dokumen");

 if (empty($lokasi_file_dokumen) ){

   $sql = mysqli_query($koneksi, "UPDATE jfx_materi
     SET    judul='$judul', deskripsi='$deskripsi', tgl_update=now()
         WHERE id ='$id'");
 } else {
   $sql1 = mysqli_query($koneksi, "SELECT jfx_materi.*
  FROM jfx_materi where id = '$id'
  ");
$row = mysqli_fetch_array($sql1);
unlink("../../file_materi/$row[file]");

   $sql = mysqli_query($koneksi, "UPDATE jfx_materi
     SET judul='$judul', deskripsi='$deskripsi', file_materi = '$nama_file_unik', tgl_update=now()
         WHERE id ='$id'");
 }


if($sql == true){
    // header('Location: ./admin.php?hlm=unit');
     echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=materi_umum'>";
    die();
} else {
    echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
}
?>
