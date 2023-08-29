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

	$psw = validate($_POST['psw']);

	if (empty($uname)) {

		header("Location: index.php?error=Username is required");

		exit();

	}else if (empty($psw)) {

		header("Location: index.php?error=Password is required");

		exit();

	}else{

		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$psw'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['uname'] === $uname && $row['psw'] === $psw) {

				echo "Logged in!";

				$_SESSION['username'] = $row['uname'];

				

				$_SESSION['password'] = $row['psw'];

				header("Location: index.php");

				exit();	

			}else{

				header("Location: index.php?error=Incorrect Username or password");

				exit();
			}

		}else{

			header("Location: index.php?error=Incorrect Username or password");

			exit();

		}

	}

}else{

	header("Location: index.php");

	exit();
	
}