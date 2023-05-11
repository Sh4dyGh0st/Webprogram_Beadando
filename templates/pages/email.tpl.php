<head>
<meta charset="utf-8">
<h1>Eredmény</h1>
</head>
<body>
<div>
<?php

$servername = "mysql.omega:3306"; // ide a localhost jon, amin fut a xampp
$username = "email"; // adatbazis felhasznaloneve
$dbname = "email"; // adatbazis neve
$password = "bencegeri";


$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
exit("Adja meg az üzenetet a Kapcsolat fülön.".$_POST['email']);
}
if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
{
exit("Hibás szöveg: ".$_POST['szoveg']);
}

echo "E-mail adatok: ";
echo "<pre>";
var_dump($_POST);
echo "</pre>";


if(isset($_SESSION['login'])) {
    
        // Kapcsolódás
        $dbh = new PDO('mysql:host=mysql.omega:3306;dbname=email_adatbazis', 'email', 'bencegeri',
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
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // PDO kivételek bekapcsolása
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Beszúrás az adatbázisba
        $sql = "INSERT INTO email_adatbazis (felhasznalo, email, szoveg, date) VALUES (:felhasznalo, :email, :szoveg, :date)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':felhasznalo', $nev);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':szoveg', $szoveg);
        $stmt->bindParam(':date', $d);
        $stmt->execute();
    
        echo "A küldés sikeres volt!";
    } catch(PDOException $e) {
        echo "Hiba az üzenet küldése közben: " . $e->getMessage();
}

?>
</div>
</body>