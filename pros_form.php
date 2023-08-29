<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aduan</title>
</head>

<body>
	
	<?php
    include('config.php');
    
    if(isset($_POST['submit'])) {
        
        $nama = $_POST[''];
        $blok = $_POST[''];
        $dorm = $_POST[''];
        $aduan = $_POST[''];
        
        $insertQuery = "INSERT INTO peserta (nama, blok, dorm , aduan) VALUES ('$noic','$nama','$kelas','$jenisPertandingan')";
        
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "Successful";
        }
        else {
            
            echo "Something is wrong".$insertQuery."".mysqli_error($conn);
        }
        
        mysqli_error($conn);
    }
    ?>
    
</body>
</html>