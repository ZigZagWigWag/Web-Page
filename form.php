<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Aduan Asrma KVS</title>
</head>
<body>

    <!--navbar-->

    <div class="navbar">
        <div class="navlogo">
            <div class="logo">
                <a href=""><img src="img/logokv.png" alt=""></a>
            </div>
        </div>
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">Contacts</a></li>
            <li><a href="">Admin</a></li>
        </ul>
    </div>

   <!--text-->

    <div class="text">
        <h3>Borang Aduan</h3>
    </div>

    <!--form-->
    <div class="form">
        <form action="/action_page.php">
            <div class="nama">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama"><br>
            </div>
        
            <div class="blok-dorm">
                <label for="blok">Blok:</label>
                <select name="blok" id="blok">
                    <option value="BA">BA</option>
                    <option value="BB">BB</option>
                    <option value="BC">BC</option>
                    <option value="GA">GA</option>
                    <option value="GB">GB</option>
                </select>
            
                <label for="dorm">Dorm:</label>
                <input type="text" id="dorm" name="dorm"><br>
            </div>

            <div class="aduan">
                <label for="aduan">Aduan:</label>
                <input type="text" id="aduan" name="aduan"><br>
            </div>

            <div class="gambar">
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar"><br><br>
            </div> 

        <center>
        <input type="submit" value="Submit" class="submit">
        </center>
      </form> 
    </div>

    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>
    <script src="script.js"></script>
</body>
</html> 