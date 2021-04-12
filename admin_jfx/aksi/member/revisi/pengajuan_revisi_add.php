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
$id_revisi = $_REQUEST['id_revisi'];
    $nomor_surat = $_REQUEST['nomor_surat'];
    $anaksatker = $_REQUEST['anaksatker'];
    // $tgl_surat = $_REQUEST['tgl_surat'];
    $hal_surat = $_REQUEST['hal_surat'];
    $nama_operator = $_REQUEST['nama_operator'];
    $keterangan = $_REQUEST['keterangan'];
    $email = $_REQUEST['email'];
    $revisi = $_REQUEST['revisi_type'];
    $no_hp = $_REQUEST['no_hp'];



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['file']['tmp_name'];
$nama_file   = $_FILES['file']['name'];



// Tentukan folder untuk menyimpan file
$folder = "../../file/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");





// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_dokumen = $_FILES['file_dokumen']['tmp_name'];
$nama_file_dokumen   = $_FILES['file_dokumen']['name'];

// Tentukan folder untuk menyimpan file
$folder_dokumen = "../../file/$nama_file_dokumen";
move_uploaded_file($lokasi_file_dokumen,"$folder_dokumen");



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_adk = $_FILES['file_adk']['tmp_name'];
$nama_file_adk   = $_FILES['file_adk']['name'];

// Tentukan folder untuk menyimpan file
$folder_adk = "../../file/$nama_file_adk";
move_uploaded_file($lokasi_file_adk,"$folder_adk");


// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_apip = $_FILES['apip']['tmp_name'];
$nama_file_apip   = $_FILES['apip']['name'];

// Tentukan folder untuk menyimpan file
$folder_apip = "../../file/$nama_file_apip";
move_uploaded_file($lokasi_file_apip,"$folder_apip");



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_chr = $_FILES['chr']['tmp_name'];
$nama_file_chr   = $_FILES['chr']['name'];

// Tentukan folder untuk menyimpan file
$folder_chr = "../../file/$nama_file_chr";
move_uploaded_file($lokasi_file_chr,"$folder_chr");



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_shr = $_FILES['shr']['tmp_name'];
$nama_file_shr   = $_FILES['shr']['name'];

// Tentukan folder untuk menyimpan file
$folder_shr = "../../file/$nama_file_shr";
move_uploaded_file($lokasi_file_shr,"$folder_shr");



// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_dukung = $_FILES['dukung']['tmp_name'];
$nama_file_dukung   = $_FILES['dukung']['name'];

// Tentukan folder untuk menyimpan file
$folder_dukung = "../../file/$nama_file_dukung";
move_uploaded_file($lokasi_file_dukung,"$folder_dukung");







if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  


$sql = mysqli_query($koneksi, " INSERT INTO surat_revisi(id_revisi, nomor_surat, judul_surat, anak_sat, tgl_surat, operator, ket_divisi, email, hp, type_revisi, tgl_input, tgl_terima, action, ta, file_susulan, file_semula, file_adk, file_apip, file_chr, file_shr, file_dukung) 
											  VALUES('$id_revisi', '$nomor_surat', '$hal_surat', '$anaksatker', NOW(), '$nama_operator', '$keterangan', '$email', '$no_hp', '$revisi', NOW(), NOW(), 'Pengajuan', NOW(), '$nama_file ', '$nama_file_dokumen', '$nama_file_adk', '$nama_file_apip', '$nama_file_chr', '$nama_file_shr', '$nama_file_dukung')");
if($sql == true){
			// header('Location: ./admin.php?hlm=unit');
			 echo "<meta http-equiv='refresh' content='0;   URL=./admin.php?hlm=revisi-list'>";
			die();
			
			}

		} else {
			echo 'ERROR! Periksa penulisan querynya.';
		}
?>
	