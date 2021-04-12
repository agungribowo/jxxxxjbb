<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$kegiatan    = $data->val($i, 2);
	$output  = $data->val($i, 3);
	$komponen  = $data->val($i, 4);
	$subkomp  = $data->val($i, 5);
	$akun  = $data->val($i, 6);
	$kode  = $data->val($i, 7);
	$jar  = $data->val($i, 8);
	$uraian  = $data->val($i, 9);
	$vol  = $data->val($i, 10);
	$sat  = $data->val($i, 11);
	$hargasat  = $data->val($i, 12);
	$jumlah  = $data->val($i, 13);



	
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into rkakl values('','$kegiatan','$output','$komponen','$subkomp','$akun','$kode', '$jar', '$uraian', '$vol', '$sat', '$hargasat', '$jumlah', '2019', 'Active')");
		$berhasil++;
	
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>