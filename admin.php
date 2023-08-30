<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Log Masuk</title>
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
        <h3>Login</h3>
    </div>

    <!--form-->
    <div class="form">
        <form action="login.php" method="POST">
            <div class="login">
                <label for="uname"><b>Username</b></label><br>
                <input type="text" placeholder="Enter Username" name="uname" required><br><br>
            
                <label for="psw" class="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required><br><br>
            
                <span class="button"><input type="submit" value="Login"></span>
            </div>
        </div>
    </form>

    <!--footer-->

    <div class="footer">
        <p>Copyright &copy; 2023 <span>Kolej Vokasional Sepang</span></p>
    </div>

    </div>
    <script src="script.js"></script>
</body>
</html> 