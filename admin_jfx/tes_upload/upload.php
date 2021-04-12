<?php
mkdir("upload");
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_max_filesize = 1000M;
$post_max_size = 1000M;
$upload_dir = "file/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "File berhasil diunggah."
?>