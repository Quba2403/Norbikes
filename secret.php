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