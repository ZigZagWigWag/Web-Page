<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connect dengan css -->
    <link rel="stylesheet" href="rekod.css?v=<?php echo time(); ?>">
    <!-- Menggunakan font Bebas Neue daripada google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Aduan Asrma KVS</title>
</head>
<body>

    <div class="container">

    <!--navbar-->

    <div class="navbar">
        <div class="navlogo">
            <div class="logo">
                <a href="index.php"><img src="img/logokv.png" alt=""></a>
            </div>
        </div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>

   <!--text-->

    <div class="text">
        <h3>Senarai Aduan</h3>
    </div>

    <!-- table -->
    <table cellpadding="5" cellspacing="0">
        <tr>
            <th>NAMA</th>
            <th>BLOK</th>
            <th>DORM</th>
            <th>ADUAN</th>
            <th>TARIKH</th>
            <th>CATATAN</th>
        </tr>

        <?php 
                // Sambung ke databse
                include_once('config.php');
                // Memaparkan maklumat dalam table 'aduan'
                $result=mysqli_query($conn, "SELECT * FROM aduan");
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td class='blok'>".$row['blok']."</td>";
                    echo "<td class='dorm'>".$row['dorm']."</td>";
                    echo "<td>".$row['aduan']."</td>";
                    echo "<td>".$row['tarikh']."</td>";
                    echo "<td>".$row['catatan']."</td>";
                    echo "</tr>";
                }
        ?>
    </table>
    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>

    </div>
</body>
</html> 
    

