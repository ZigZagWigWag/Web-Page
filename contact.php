<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
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
        <h3>Contacts</h3>
    </div>

    <!--contact-->
  <div class="contacts">
    <div class="ketua">
        <img src="img/ketua.jpeg" alt="">
        <h1>Ketua Asrama</h1>
        <button onclick="myFunction1()" id="myBtn">Read more</button>
        <span id="more1">asasas</span>
    </div>
    <div class="penyelia">
        <img src="img/penyelia.jpg" alt="">
        <h1>Penyelia Asrama</h1>
        <button onclick="myFunction2()" id="myBtn">Read more</button>
        <span id="more2">asasas</span>
    </div>  
  </div>
    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>
    
    </div>
    <script>
        function myFunction1() {
    var x = document.getElementById("more1");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  function myFunction2() {
    var x = document.getElementById("more2");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
    </script>
</body>
</html> 