<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
// $username = $_POST['username'];
// $password = $_POST['password'];



$username = $koneksi->real_escape_string($_POST['username']);
$password = $koneksi->real_escape_string($_POST['password']);



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password=MD5('$password') and status_user='Active'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="sysadmin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "sysadmin";
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		// alihkan ke halaman dashboard admin
		header("location:./modul/sysadmin/admin?hlm=dashboard");




		// cek jika user login sebagai pegawai
	}else if($data['level']=="member"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "member";
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		// alihkan ke halaman dashboard pegawai
		header("location:./modul/member/admin?hlm=profile");



	}else{

		// alihkan ke halaman login kembali
		header("location:../media?hal=login-area&pesan=gagal");
		// header("location:../../");

	}


}else{
	header("location:../media?hal=login-area&pesan=gagal");
		// header("location:../../");
}



?>
