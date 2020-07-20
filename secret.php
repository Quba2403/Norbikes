<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
  body {
  background: url(tlo.png);
  background-size: cover;
}

.logo {
    width: 400px;
    height: 200px;
}

</style>

<div><a href="https://www.artcom.pl/"></a> <img class="logo" src="logo.png" alt="logo">
<?php
session_start();



if (isset($_SESSION['name'])){
   
    //jeśli mam sesję logowania to robię menu
    $username = $_SESSION['name'];
    echo "<h1>Witaj<h1>".$username;
    echo "<br>";
    echo "<br> <a href='logout.php'>Wyloguj</a> <br>";
    echo "<br>";
    echo "<a href='index.php.php'>Przejdź na główną strone</a>";
}
else {
    echo "3";
    //jeśli próbuję się tu dostać, a nie jestem zalogowany - wypad
    header('Location: register.php');
}
?> 
    
</body>
</html>
