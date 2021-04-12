<?php
// session_start();
 if($_SESSION['level']=="")
  header('Location: ./');


require('../../koneksi.php');

// untuk data add
$id= $_POST['id'];
$nomor_kep= $_POST['nomor_kep'];
$perihal= $_POST['perihal'];
$file= $_POST['$file'];

 $acak2 = rand(00000,55555);

 // Baca lokasi file sementar dan nama file dari form (fupload)
 $lokasi_file_dokumen = $_FILES['file']['tmp_name'];
 $nama_file_dokumen  = $_FILES['file']['name'];
 $nama_file_unik  = $acak2.$nama_file_dokumen ;

 $folder_dokumen = "../../file_regulasi/$nama_file_unik";
move_uploaded_file($lokasi_file_dokumen,"$folder_dokumen");

 if (empty($lokasi_file_dokumen) ){
   $sql = mysqli_query($koneksi, "UPDATE jfx_regulasi
     SET    nomor_kep='$nomor_kep', perihal='$perihal', tanggal=now()
         WHERE id ='$id'");
 } else {
   $sql1 = mysqli_query($koneksi, "SELECT jfx_regulasi.*
  FROM jfx_regulasi where id = '$id'
  ");
$row = mysqli_fetch_array($sql1);
unlink("../../file_regulasi/$row[file]");

   $sql = mysqli_query($koneksi, "UPDATE jfx_regulasi
     SET nomor_kep='$nomor_kep', perihal='$perihal', file = '$nama_file_unik', tanggal=now()
         WHERE id ='$id'");
 }

if($sql == true){
    // header('Location: ./admin.php?hlm=unit');
     echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=berita_bursa'>";
    die();
} else {
    echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin?hlm=error'>";
}
?>
