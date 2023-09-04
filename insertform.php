<!-- php insert -->
<?php
    include('config.php');
    
    if(isset($_POST['submit'])) {
        
        $nama = $_POST['nama'];
        $blok = $_POST['blok'];
        $dorm = $_POST['dorm'];
        $aduan = $_POST['aduan'];
        $tarikh = $_POST['tarikh'];
        $catatan = $_POST["catatan"];
        
        $insertQuery = "INSERT INTO aduan (nama, blok,dorm, aduan, tarikh,catatan) VALUES ('$nama','$blok','$dorm','$aduan','$tarikh','$catatan')";
        
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "<script>alert('Success');"."window.location='index.php'</script>";
        }
        else {
            
            echo "<script>alert('Something is Wrong');"."window.location='form.php'</script>";
        }
        
        mysqli_error($conn);
    }
    ?>

