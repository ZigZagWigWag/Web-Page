<?php
    // sambung dengan databse
    include_once("config.php");
    $id = $_GET['id'];

    // memadam maklumat mengikut id aduan
    $result = mysqli_query($conn, "DELETE FROM aduan WHERE id='$id'");
    echo "<script>alert('Memadam Data Berjaya');"
	. "window.location='admin.php'</script>";

?>  