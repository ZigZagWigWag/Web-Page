<?php


    include_once("config.php");
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM aduan WHERE id='$id'");
    echo "<script>alert('Memadam Data Berjaya');"
	. "window.location='table_aduan.php'</script>";

?>