<?php

$dsn = 'mysql:dbname=zooticoon;host=127.0.0.1';
$user = 'root';
$password = 'root';
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Connexion échouée:' . $e->getMessage();
}
try{
    $sql = 'select * from ticket';
    $result= $dbh->query($sql)->fetchAll();
}
catch (PDOException $e) {
    echo 'Requête échouée:' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Tickets</title>
</head>
<body>
<div>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>date</th>
            <th>login</th>
            <th>sujet</th>
            <th>description</th>
            <th>prio</th>
            <th>secteur</th>
            <th>statut</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $ticket) { ?>
            <tr>
                <td><?php echo $ticket['id']; ?></td>
                <td><?php echo $ticket['datet']; ?></td>
                <td><?php echo $ticket['login']; ?></td>
                <td><?php echo $ticket['sujet']; ?></td>
                <td><?php echo $ticket['description']; ?></td>
                <td><?php echo $ticket['prio']; ?></td>
                <td><?php echo $ticket['secteur']; ?></td>
                <td><?php echo $ticket['statut']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
