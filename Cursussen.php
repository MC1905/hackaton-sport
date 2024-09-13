<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['courses'])) {
        
        $_SESSION['courses'] = array_map(function($course, $index) {
            return [
                'name' => $course,
                'start_date' => $_POST['start_date'][$index],
                'end_date' => $_POST['end_date'][$index]
            ];
        }, $_POST['courses'], array_keys($_POST['courses']));
    } else {
        $_SESSION['courses'] = []; 
    }

    header('Location: index.php');
    exit();
}

function isChecked($courseName) {
    if (!empty($_SESSION['courses'])) {
        foreach ($_SESSION['courses'] as $course) {
            if ($course['name'] === $courseName) {
                return 'checked';
            }
        }
    }
    return '';
}


function getStartDate($courseName) {
    if (!empty($_SESSION['courses'])) {
        foreach ($_SESSION['courses'] as $course) {
            if ($course['name'] === $courseName) {
                return $course['start_date'];
            }
        }
    }
    return '';
}

function getEndDate($courseName) {
    if (!empty($_SESSION['courses'])) {
        foreach ($_SESSION['courses'] as $course) {
            if ($course['name'] === $courseName) {
                return $course['end_date'];
            }
        }
    }
    return '';
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursussen</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2>Kies je cursussen en geef start- en einddatum op</h2>
    <form method="post" action="">
        <label><input type="checkbox" name="courses[]" value="Yoga" <?= isChecked('Yoga'); ?>> Yoga</label><br>
        <label>Startdatum: <input type="date" name="start_date[]" value="<?= getStartDate('Yoga'); ?>"></label><br>
        <label>Einddatum: <input type="date" name="end_date[]" value="<?= getEndDate('Yoga'); ?>"></label><br><br>

        <label><input type="checkbox" name="courses[]" value="Pilates" <?= isChecked('Pilates'); ?>> Pilates</label><br>
        <label>Startdatum: <input type="date" name="start_date[]" value="<?= getStartDate('Pilates'); ?>"></label><br>
        <label>Einddatum: <input type="date" name="end_date[]" value="<?= getEndDate('Pilates'); ?>"></label><br><br>

        <label><input type="checkbox" name="courses[]" value="Paaldansen" <?= isChecked('Paaldansen'); ?>> Paaldansen</label><br>
        <label>Startdatum: <input type="date" name="start_date[]" value="<?= getStartDate('Paaldansen'); ?>"></label><br>
        <label>Einddatum: <input type="date" name="end_date[]" value="<?= getEndDate('Paaldansen'); ?>"></label><br><br>

        <button type="submit">Opslaan</button>
    </form>
    <br>
    <a href="index.php">Terug naar Dashboard</a>
</body>
</html>