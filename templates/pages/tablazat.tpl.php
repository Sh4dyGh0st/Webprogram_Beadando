<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/tablazat.css">
</head>
<body>
<div>
<?php

$user = 'email';
$password = 'bencegeri';
$database = 'email';
$servername='mysql.omega:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Kapcsolat ellenőrzése
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query adatbázishoz
$sql = " SELECT felhasznalo,email,szoveg,date FROM email_adatbazis ORDER BY date DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML kód táblázatos kiíratáshoz -->
<!DOCTYPE html>
<html lang="hu">
    <section>
        <h1>Üzenetek</h1><br>
        <!-- Táblázat -->
        <table>
            <tr>
                
                <th>Felhasználó</th>
                <th>E-Mail</th>
                <th>Üzenet</th>
                <th>Dátum</th>
            </tr>
            <!-- PHP - sorok -->
            <?php
                // Körbejárás
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- Adatok sorba -->
                
                <td><?php echo $rows['felhasznalo'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['szoveg'];?></td>
                <td><?php echo $rows['date'];?></td>
            </tr>
            <?php
                }
            ?>
        </table><br>
    </section>
</body>