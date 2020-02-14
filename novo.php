<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $godine = $_POST['godine'];
    $kontakt = $_POST['kontakt'];
 
    $sql = "INSERT INTO members (ime, prezime, kontakt, godine, status) VALUES ('$ime', '$prezime', '$kontakt', '$godine', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>Novi student je uspesno dodat</p>";
        echo "<a href='../create.php'><button type='button'>Nazad</button></a>";
        echo "<a href='../index.php'><button type='button'>Pocetna</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>
