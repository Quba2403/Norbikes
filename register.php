<?php
session_start();
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

<script>
function check() {
    var x = document.getElementById("name").value;
     
    if(x.length<3) {
         
      alert("Za krótkie imie");
    } 
}

</script>

<?php

if(isset($_POST['add'])) {
  $servername = "localhost";
  $username = "id14361803_root";
  $password = "+Dt7d|3jXz==>|&4";
  $dbname = "id14361803_dane";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Coś nie pykło: " . mysqli_connect_error());
  }
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $pass = $_POST['pass'];
  $sql = "INSERT INTO user (name, surname, pass) VALUES ('$name', '$surname',
  '$pass')";


  if(strlen($pass)>3) {
    if (mysqli_query($conn, $sql)) {
      header('Location: index.php');
    } else {
      echo "Nie dziaua : " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  else {
    echo 'Za krótkie hasło';
  }
  
  mysqli_close($conn);
}


?>
<div><a href="https://www.artcom.pl/"></a> <img class="logo" src="logo.png" alt="logo">
<h1 class="forma">Zarejestruj się!!!</h1>
<form class="form" name="myForm" method ="post" action ="<?php $_PHP_SELF ?>">
<h2>Imie:<h2> <input name = "name" type = "text" id ="name" required><br>
<h2>Nazwisko:<h2> <input name = "surname" type = "text" id ="surname" required><br>
<h2>Hasło:<h2> <input name = "pass" type = "password" id ="pass" required><br> <br>
<input name = "add" type="submit" onclick="check()" id ="add" value = "Zarejestruj">
<input  id="add" type="button" value="Strona główna" onClick="location.href='index.php';" />
</form>


</body>
</html>