<?php

session_start();

include "config.php";

if (isset($_POST['uname']) && isset($_POST['psw'])) {

	function validate($data){

		$data = trim($data);

		$data = stripcslashes($data);

		$data = htmlspecialchars($data);

		return $data;

	}

	$uname = validate($_POST['uname']);

	$pass = validate($_POST['psw']);

	if (empty($uname)) {

		echo "<script>alert('Username is required');"."window.location='admin.php'</script>";

		exit();

	}else if (empty($pass)) {

		echo "<script>alert('Password is required');"."window.location='admin.php'</script>";

		exit();

	}else{

		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $uname && $row['password'] === $pass) {

				echo "<script>alert('Logged In!');"."window.location='table_aduan.php'</script>";

				$_SESSION['username'] = $row['username'];

				

				$_SESSION['id'] = $row['id'];


				exit();	

			}else{

				echo "<script>alert('Incorrect Username Or Password');"."window.location='admin.php'</script>";

				exit();
			}

		}else{

			echo "<script>alert('Incorrect Username Or Password');"."window.location='admin.php'</script>";

			exit();

		}

	}

}else{

	header("Location: admin.php");

	exit();
	
}