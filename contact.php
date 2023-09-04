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
        <h1>Ketua Warden</h1>
        <button onclick="myFunction1()" id="Btn1">Read more</button>
        <span id="more1">
            Jayamin <br>
            0 13-789 8277
        </span>
    </div>

    <div class="penyelia">
        <img src="img/penyelia.jpg" alt="">
        <h1>Penyelia Asrama</h1>
        <button onclick="myFunction2()" id="Btn2">Read more</button>
        <span id="more2">
            John Doe <br>
            0 12-345 6789
        </span>
    </div>  
  </div>
    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>
    
    </div>
    <script>
        function myFunction1() {
    var more1 = document.getElementById("more1");
    var btnText1 = document.getElementById("Btn1");
    if (more1.style.display === "block") {
      btnText1.innerHTML = "Read more";
      more1.style.display = "none";
    } else {
      btnText1.innerHTML = "Read less";
      more1.style.display="block";
    }
  }

  function myFunction2() {
    var more2 = document.getElementById("more2");
    var btnText2 = document.getElementById("Btn2");
    if (more2.style.display === "block") {
      btnText2.innerHTML = "Read more";
      more2.style.display = "none";
    } else {
      btnText2.innerHTML = "Read less";
      more2.style.display="block";
    }
  }


 
    </script>
</body>
</html> 


<!-- HTML !-->

