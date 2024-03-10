<?php
// Memulakan session
session_start();

// Connect dengan database
include "config.php";

//Mendapatkan input daripada pengguna
if (isset($_POST['uname']) && isset($_POST['psw'])) {
// Function untuk membersihkan dan mengesahkan input pengguna
	function validate($data){
		// Membuang ruang putih dari permulaan dan penghujung string
		$data = trim($data); 
		// Mengeluarkan backslash (\) daripada string
		$data = stripcslashes($data);
		// Menukar aksara khas kepada entiti HTML
		$data = htmlspecialchars($data);

		return $data;

	}

	// Membersihkan dan mengesahkan username dan password
	$uname = validate($_POST['uname']);

	$pass = validate($_POST['psw']);

	
	/* 
	Menyemak sama ada username kosong 
	Memberi amaran jika ya
	*/
	if (empty($uname)) {

		echo "<script>alert('Username is required');"."window.location='login.php'</script>";

		exit();

	/* 
	Menyemak sama ada password kosong 
	Memberi amaran ya
	*/
	}else if (empty($pass)) {

		echo "<script>alert('Password is required');"."window.location='login.php'</script>";

		exit();

	}else{
		// Menyemak pangkalan data untuk melihat sama ada input yang disediakan betul
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		
		// Mengesahkan padanan username dan password
		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $uname && $row['password'] === $pass) {

				/*
				Memaparkan mesej berjaya jika input betul 
				Redirect ke halaman admin
				 */
				echo "<script>alert('Logged In!');"."window.location='admin.php'</script>";

				$_SESSION['username'] = $row['username'];

				

				$_SESSION['id'] = $row['id'];


				exit();	

			}else{
				/*
				Memaparkan mesej gagal jika input salah
				Redirect semula ke halaman login
				*/
				echo "<script>alert('Incorrect Username Or Password');"."window.location='login.php'</script>";

				exit();
			}

		}else{

			echo "<script>alert('Incorrect Username Or Password');"."window.location='login.php'</script>";

			exit();

		}

	}

}else{

	header("Location: login.php");

	exit();
	
}