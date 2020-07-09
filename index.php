<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
if(isset($_POST['add'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dane";
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
if (mysqli_query($conn, $sql)) {
echo "Dodane xD";
} else {
echo "Nie dziaua : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<h1>Nowy rekord</h1>
<form method = "post" action = "form.php">
Imie: <input name = "name" type = "text" id = "name"><br>
Nazwisko: <input name = "surname" type = "text" id = "surname"><br>
Hasło: <input name = "pass" type = "text" id = "pass"><br>
 <input name = "add" type = "submit" id = "add" value = "Zarejestruj">
</form>
</body>
</html>

<!-- <?php $_PHP_SELF ?> -->