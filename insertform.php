<!-- php insert -->
<?php
    include('config.php');
    
    if(isset($_POST['submit'])) {
        
        $nama = $_POST['nama'];
        $blok = $_POST['blok'];
        $aduan = $_POST['aduan'];
        $tarikh = $_POST['tarikh'];
        $catatan = $_POST["catatan"];
        
        $insertQuery = "INSERT INTO aduan (nama, blok, aduan, tarikh,catatan) VALUES ('$nama','$blok','$aduan','$tarikh','$catatan')";
        
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "<script>alert('Success');"."window.location='index.php'</script>";
        }
        else {
            
            echo "<script>alert('Something is Wrong');"."window.location='form.php'</script>";
        }
        
        mysqli_error($conn);
    }
    ?>

