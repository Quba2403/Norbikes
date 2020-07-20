<?php
session_start();

    require('login.php');
    


?>

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

.form {
  position: absolute;
  top: 40%;
  left: 44%;
  color: #3cbabe;
}

.forma {
  position: absolute;
  top: 30%;
  left: 44%;
  color: #3cbabe;
}

#add {
  text-decoration: none;
  text-align: center;
  color: #3cbabe;
  border: 2px solid #3cbabe;
  border-radius: 10%;
  width: 150px;
  line-height: 40px;
  display: inline-block;
  font-family: Arial;
  font-weight: 600;
  font-size: 20px;
  background-color: gray;
}
</style> 


<div ><a href="https://www.artcom.pl/"></a> <img class="logo" src="logo.png" alt="logo">
<h1 class="forma">Zaloguj się!!!</h1>
<form class="form" method = "post" action = "<?php $_PHP_SELF ?>">
<h2>Imie:<h2> <input name = "name" type = "text" id = "name"><br>
<h2>Nazwisko:<h2> <input name = "surname" type = "text" id = "surname"><br>
<h2>Hasło:<h2> <input name = "pass" type = "password" id = "pass"><br> <br>
<input  name = "add" type = "submit" id = "add" value = "Zaloguj się" >
</form>
</body>
</html>


