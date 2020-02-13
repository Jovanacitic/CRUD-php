<!DOCTYPE html>
<html>
<head>
    <title>Dodaj studenta</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Dodaj studenta</legend>
 
    <form action="php_akcije/novo.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Ime</th>
                <td><input type="text" name="ime" placeholder="Vase ime" /></td>
            </tr>     
            <tr>
                <th>Prezime</th>
                <td><input type="text" name="prezime" placeholder="Vase prezime" /></td>
            </tr>
            <tr>
                <th>Godina upisa</th>
                <td><input type="text" name="godine" placeholder="Godina upisa studija" /></td>
            </tr>
            <tr>
                <th>Kontakt</th>
                <td><input type="text" name="kontakt" placeholder="Kontakt telefon" /></td>
            </tr>
            <tr>
                <td><button type="submit">Sacuvaj izmene</button></td>
                <td><a href="index.php"><button type="button">Nazad</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>