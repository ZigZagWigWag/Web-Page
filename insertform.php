<!-- php insert -->
<?php
    include('config.php');
    
    if(isset($_POST['submit'])) {
        
        $nama = $_POST['nama'];
        $blok = $_POST['blok'];
        $aduan = $_POST['aduan'];
        $tarikh = $_POST['tarikh'];
        
        $insertQuery = "INSERT INTO aduan (nama, blok, aduan, tarikh) VALUES ('$nama','$blok','$aduan','$tarikh')";
        
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "<script>alert('Success');"."window.location='index.php'</script>";
        }
        else {
            
            echo "<script>alert('Something is Wrong');"."window.location='form.php'</script>";
        }
        
        mysqli_error($conn);
    }
    ?>
