<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welkom op het Dashboard</h2>
    <p>Je bent succesvol ingelogd!</p>
    <h3>Jouw Abonnement</h3>
    <p><?= isset($_SESSION['subscription']) ? $_SESSION['subscription'] : 'Geen abonnement geselecteerd'; ?></p>

    <h3>Jouw Cursussen</h3>
    <?php if (!empty($_SESSION['courses'])): ?>
        <ul>
            <?php foreach ($_SESSION['courses'] as $course): ?>
                <li><?= $course['name']; ?> (Start: <?= $course['start_date']; ?>, Eind: <?= $course['end_date']; ?>)</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Geen cursussen geselecteerd.</p>
    <?php endif; ?>

    <br>

    <a href="abonnement.php"><button>Mijn Abonnement</button></a>

    <a href="cursussen.php"><button>Mijn Cursussen</button></a>
    <a href="logout.php"><button>Uitloggen</button></a>
</body>
</html>
