<?php
// Sambung ke database
include 'config.php';

if(isset($_POST['catatan']))
{
	// Mendapatkan data daripada form
	$id = $_POST['id'];
   
	$catatan = $_POST['catatan'];

	// Mengemaskini data kepada input admin
	$query ="UPDATE aduan SET catatan= '$catatan' WHERE id= '$id'";

$result =mysqli_query($conn, $query);

/*
Memaparkan mesej berjaya jika data berjaya dikemaskini
Redirect ke halaman admin
*/
if(mysqli_query($conn, $query)) {
	echo "<script>alert('Kemaskini maklumat berjaya! Yey!')</script>" .
	"<script>window.location='admin.php'</script>";
}
// Memaparkan mesej gagal jika data gagal dikemaskini
else{
	echo "<script>alert('Kemaskini tidak berjaya')</script>";
}
}

?>