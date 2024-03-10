<!-- Memulakan session -->
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connect dengan css -->
    <link rel="stylesheet" href="update.css?v=<?php echo time(); ?>">
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
        <span><li><a href="logout.php" >Log Out</a></li></span>
    </div>

   <!--text-->

    <div class="text">
        <h3>Kemaskini</h3>
    </div>

    <!--form-->

    <?php
    // Sambung dengan database
	include_once ('config.php');
    // Mendapatkan id aduan
	$id= $_GET['id'];
	$sql = "SELECT * FROM aduan WHERE id= '$id' ";

	$result =mysqli_query($conn, $sql);
    // Mendapatkan data dari database
	while($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$catatan = $row['catatan'];
	}
?>	


    <div class="form">
        <!-- Sambung dengan updatepro.php -->
        <form action="updatepro.php" name="update" method="POST">
            <div class="id">
                <label for="id">id</label>
                <input type="text" id="id" name="id"value="<?php echo $id;?>"><br>
            </div>
            <div class="catatan">
                <label for="catatan">Catatan:</label>
                <input type="text" id="catatan" name="catatan" value="<?php echo $catatan;?>"><br>
            </div>
        
         


        <input type="submit" value="Submit" class="submit" name="submit">

      </form> 
    </div>

    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>

    </div>

</body>
</html> 
<?php 

}else{

     header("Location: login.php");

     exit();

}

 ?>