<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (!empty($_POST['subscription'])) {
        $_SESSION['subscription'] = $_POST['subscription'];
    }
 
    header('Location: index.php');
    exit();
}


if (!isset($_SESSION['subscription'])) {
    $_SESSION['subscription'] = 'Geen';
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnement</title>
</head>
<body>
    <h2>Kies je abonnement</h2>
    <form method="post" action="">
        <label><input type="radio" name="subscription" value="1x per week" <?= $_SESSION['subscription'] === '1x per week' ? 'checked' : ''; ?>> 1x per week</label><br>
        <label><input type="radio" name="subscription" value="2x per week" <?= $_SESSION['subscription'] === '2x per week' ? 'checked' : ''; ?>> 2x per week</label><br>
        <label><input type="radio" name="subscription" value="Onbeperkt" <?= $_SESSION['subscription'] === 'Onbeperkt' ? 'checked' : ''; ?>> Onbeperkt</label><br>
        <button type="submit">Opslaan</button>
    </form>
    <br>
    <a href="index.php">Terug naar Dashboard</a>
</body>
</html>