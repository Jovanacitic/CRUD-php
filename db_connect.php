<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "crud_php";
//Uspostavljenja konekcije
$connect = new mysqli($localhost, $username, $password, $db_name);
//Provera konekcije
if($connect->connect_error) {
    die("Povezivanje nije uspelo : " .$connect->connect_error);
}   else {
    echo "Uspesno povezivanje!";
}
?>