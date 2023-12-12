<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zooticoon</title>
</head>
<body>
<?php

$heure = date('G');


if ($heure >= 0 && $heure < 12) {
$image = 'zèbre.jpg';
$message = 'Good morning! Here is a zebra.';
} elseif ($heure >= 12 && $heure < 18) {
$image = 'Girafe.jpg';
$message = 'Bon aprem ! Voici une girafe.';
} else {
$image = 'Panda.jpg';
$message = 'Good noon! Here is a panda.';
}
?>

<nav class="navbar">
    <a href="index.html" class="logo">ZOOTICOON</a>
    <div class="nav-links">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="mammifere.html">Exotic Mammals</a></li>
            <li><a href="marins.html">Marine Animals</a></li>
            <li><a href="reptiliens.html">Reptilian Animals</a></li>
            <li><a href="formulaire.html">Support</a></li>
        </ul>
    </div>
    <img src="images/pngegg.png" alt="menu hamburger" class="menu-hamburger">
</nav>

<header>
    <div class="greeting-container">
        <img src="images/<?php echo $image; ?>" alt="Zoo Animal">
        <p><?php echo $message; ?></p>
    </div>
</header>

</body>
<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")

    menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
    })
</script>
</html>
