<?php
include 'config.php';

if(isset($_POST['catatan']))
{
	$id = $_POST['id'];
   
	$catatan = $_POST['catatan'];

	$query ="UPDATE aduan SET catatan= '$catatan' WHERE id= '$id'";

$result =mysqli_query($conn, $query);

if(mysqli_query($conn, $query)) {
	echo "<script>alert('Kemaskini maklumat berjaya! Yey!')</script>" .
	"<script>window.location='admin.php'</script>";
}
else{
	echo "<script>alert('Kemaskini tidak berjaya')</script>";
}
}

?>