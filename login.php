<?php
//gotowy do otwarcia sesji
session_start();
//połączenie z bazą danych, w osobnym pliku (connect.php) lub przepisujemy dane
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
//próbuję wybrać z bazy rekord z danych formularza
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
//liczę rekordy
$count = mysqli_num_rows($result);
if ($count == 1){
//jeśli znalazłem jeden dopasowany rekord, to znaczy że dane są poprawne
//ustawiam sesję "username" z nazwą użytkownika
$_SESSION['username'] = $username;
header('Location: secret.php');
}
else {
//co robię jeśli podano złe hasło
$_POST['message'] = 'Zue hasuo xD';
header('Location: form.php');
}
}
?>


<!-- secret.php -->
<?php
if (isset($_SESSION['username'])){
//jeśli mam sesję logowania to robię menu
$username = $_SESSION['username'];
echo "Witaj ".$username;
echo "<a href='logout.php'>Wyloguj</a>";
}
else {
//jeśli próbuję się tu dostać, a nie jestem zalogowany - wypad
header('Location: index.php');
}
?>



<!-- logout.php -->
<?php
session_start();
session_destroy();
header('Location: index.php');
?>