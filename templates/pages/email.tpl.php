<head>
<meta charset="utf-8">
<h2>E-mail kiíratása</h2>
</head>
<body>
<div>
<?php

$servername = "localhost"; // ide a localhost jon, amin fut a xampp
$username = "root"; // adatbazis felhasznaloneve
$dbname = "email"; // adatbazis neve


$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
exit("Hibás email: ".$_POST['email']);
}
if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
{
exit("Hibás szöveg: ".$_POST['szoveg']);
}

echo "Kapott értékek: ";
echo "<pre>";
var_dump($_POST);
echo "</pre>";


if(isset($_SESSION['login'])) {
    
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['csaladi_nev']; $_SESSION['un'] = $row['uto_nev'];
        }
        
        $nev = $_SESSION['csn']; 
} else
{
    $nev = "Vendég";
}

$email = $_POST['email'];
$szoveg = $_POST['szoveg'];
$d = date('d/m/y H:i:s');


try {
        // PDO kapcsolat létrehozása
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
        // PDO kivételek bekapcsolása
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Beszúrás az adatbázisba
        $sql = "INSERT INTO email (felhasznalo, email, szoveg, date) VALUES (:felhasznalo, :email, :szoveg, :date)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':felhasznalo', $nev);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':szoveg', $szoveg);
        $stmt->bindParam(':date', $d);
        $stmt->execute();
    
        echo "Az adatok beszúrása sikeres volt!";
    } catch(PDOException $e) {
        echo "Hiba az adatok beszúrása közben: " . $e->getMessage();
}

?>
</div>
</body>