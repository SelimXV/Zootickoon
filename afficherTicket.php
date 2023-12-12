<?php

$dsn = 'mysql:dbname=zooticoon;host=127.0.0.1';
$user = 'root';
$password = 'root';
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Connexion échouée:' . $e->getMessage();
}
if (isset($_GET['id'])) {
    try {

        $sql = "select * from ticket where id=:id";
        $statement = $dbh->prepare($sql);
        $id = $_GET['id'];
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();

    } catch (PDOException $e) {
        echo 'Requête échouée:' . $e->getMessage();

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Affichage Id Tickets</title>
</head>
<body>
<div class="container">
    <h1>Entrez l'id correspond à votre ticket</h1>
    <form action="" method="GET">
        <div class="form-group">
            <label for="id">ID :</label>
            <input type="id" id="id" name="id" required>
        </div>
        <?php foreach ($result as $ticket) { ?>
        <h1>Ticket n°<?php echo $ticket['id'] ?></h1>

        <p>
            Date: <?php echo $ticket['datet'] ?>
        </p>

        <p>
            login: <?php echo $ticket['login'] ?>
        </p>

        <p>
            sujet: <?php echo $ticket['sujet'] ?>
        </p>

        <p>
            Description: <?php echo $ticket['description'] ?>
        </p>

        <p>
            prio: <?php echo $ticket['prio'] ?>
        </p>

        <p>
            secteur: <?php echo $ticket['secteur'] ?>
        </p>

        <p>
            statut: <?php echo $ticket['statut'] ?>
        </p>
        <?php } ?>
        <a href="index.php">Retour à l'accueil</a>
    </form>
</div>
</body>
</html>