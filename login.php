<?php
//połączenie z bazą danych, w osobnym pliku (connect.php) lub przepisujemy dane
require('connect.php');
if (isset($_POST['name']) and isset($_POST['pass'])){
    $username = $_POST['name'];
    $password = $_POST['pass'];
    //próbuję wybrać z bazy rekord z danych formularza
    $query = "SELECT * FROM `user` WHERE name='$username' and pass='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    //liczę rekordy
    $count = mysqli_num_rows($result);
    if ($count == 1){
        //jeśli znalazłem jeden dopasowany rekord, to znaczy że dane są poprawne
        //ustawiam sesję "username" z nazwą użytkownika
        $_SESSION['name'] = $username;

        // echo $_SESSION['name'];
        header('Location: index.php');
        // echo "ok";
    }
    else {
        //co robię jeśli podano złe hasło
        $_POST['message'] = 'Zue hasuo xD'; 
        header('Location: index.php');
    }
}
?>