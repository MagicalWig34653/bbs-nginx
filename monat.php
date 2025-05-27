<?php


if (isset($_GET['a'])) {
    $timestamp = strtotime(filter_input(INPUT_POST, 'datum'));

    $monat = date('F', $timestamp);

    switch ($monat) {
        case 'January':
            echo 'Januar';
            break;
        case 'February':
            echo 'Februar';
            break;
        case 'March':
            echo 'March';
            break;
        case 'April':
            echo 'April';
            break;
        case 'May':
            echo 'May';
            break;
        case 'June':
            echo 'June';
            break;
        case 'July':
            echo 'July';
            break;
        case 'August':
            echo 'August';
            break;
        case 'September':
            echo 'September';
            break;
        case 'October':
            echo 'October';
            break;
        case 'November':
            echo 'November';
            break;
        case 'December':
            echo 'December';
            break;
        default:
            echo 'Nix';
            break;
    }


    die();

}
?>


<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    body {
        font-family: -apple-system, Helvetica, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>
<body style="min-height: 90vh">
<form method="POST" action="?a" style="scale: 5">
    <input type="date" name="datum" placeholder="Datum" required><br>
    <input type="submit" value="Senden" style="margin: .5rem; width: 100%">
</form>
</body>
</html>
