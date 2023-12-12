
<?php

session_start();
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['description'])){
    echo $_POST['email'];
    echo $_POST['password'];
    echo $_POST['name'];
    echo $_POST['phone'];
    echo $_POST['description'];
}

$dsn = 'mysql:dbname=zooticoon;host=127.0.0.1';
$user = 'root';
$password = 'root';
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Connexion échouée:' . $e->getMessage();
}
try{
    $sql = "insert into ticket (login, sujet, description, prio, secteur, statut) values ('zaza','fuite deau','leau coule du robinet','moyen','savane', 'en cours')";
    $dbh->exec($sql);
}
catch (PDOException $e) {
    echo 'Requête échouée:' . $e->getMessage();
}
?>

