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

$id_user= $_POST['id_user'];


 $id_revisi = $_POST['id_revisi'];
    $status = $_POST['status'];
    $keterangan1= $_POST['keterangan1'];
 
    $telahsampai = $_POST['telahsampai'];
    $tgl_terbit = $_POST['tgl_terbit'];
    $tahap = $_POST['tahap'];

    // $blmterbit1 = $_POST['blmterbit1'];


// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['file_surat']['tmp_name'];
$nama_file   = $_FILES['file_surat']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../../file/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");



move_uploaded_file($lokasi_file,"$folder");
 




     $sql = mysqli_query($koneksi, "UPDATE surat_revisi SET
          status_verifikasi='$status',
          alasan_tolak='$keterangan1',
          sampai_di='$telahsampai',
          tgl_terbit='$tgl_terbit',
          action='$tahap',
          file_akhir = '$nama_file'
     
          WHERE id_revisi='$id_revisi'");



if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;  URL=../sysadmin/admin.php?hlm=verifikasi'>";
			die();

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	verifikasi.php