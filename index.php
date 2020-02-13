<?php require_once 'php_akcije/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Baza studenata</title>
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
 
<div class="manageMember">
    <a href="create.php"><button type="button">Dodaj studenta</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Godina upisa</th>
                <th>Telefon</th>
                <th>Opcije</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM members WHERE active = 1";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['ime']." ".$row['prezime']."</td>
                        <td>".$row['godine']."</td>
                        <td>".$row['kontakt']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>izmeni</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Ukloni</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>Podaci nedostupni</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>