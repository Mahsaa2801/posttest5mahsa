<?php
    session_start();
    if(isset($_SESSION["username"])){  
    }else{
        echo header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
        <h2>ANDA BERHASIL LOGIN</h2>
        <marquee><h2>Selamat Datang</h2></marquee>
        <br>
        <a href="input.html"><input type="submit" value="Input"></a>
</div>
</body>
</html>