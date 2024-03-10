<!-- php insert -->
<?php
    // Sambung dengan database
    include('config.php');
    // Memeriksa jika pengguna menekan butang submit
    if(isset($_POST['submit'])) {
        // Memasukkan input pengguna ke dalam database mengikut medan
        $nama = $_POST['nama'];
        $blok = $_POST['blok'];
        $dorm = $_POST['dorm'];
        $aduan = $_POST['aduan'];
        $tarikh = $_POST['tarikh'];
        $catatan = $_POST["catatan"];
        
        $insertQuery = "INSERT INTO aduan (nama, blok,dorm, aduan, tarikh,catatan) VALUES ('$nama','$blok','$dorm','$aduan','$tarikh','$catatan')";
        /*
        Memaparkan mesej berjaya jika maklumat berjaya dimasukkan
        Redirect pengguna ke laman utama
        */
        if (mysqli_query($conn, $insertQuery)) {
            
            echo "<script>alert('Success');"."window.location='index.php'</script>";
        }
        /*
        Memaparkan mesej gagal jika maklumat gagal dimasukkan
        Redirect pengguna ke laman form
        */
        else {
            
            echo "<script>alert('Something is Wrong');"."window.location='form.php'</script>";
        }
        
        mysqli_error($conn);
    }
    ?>

