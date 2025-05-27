<?php

if (isset($_GET['a'])) {
    $geburtsjahr = filter_input(INPUT_POST, 'geburtsjahr');
    $partner = filter_input(INPUT_POST, 'partner');

    $alter = date('Y') - $geburtsjahr;
//    echo $alter;

    if (!$partner) {
        switch ($alter) {
            case $alter >= 30 && $alter < 40:
                echo 'Magier';
                break;
            case $alter >= 40:
                echo 'Erzmagier';
                break;
            default:
                echo 'Nix';
                break;
        }
    } else {
        die('Leider kein Zauberer mehr!');
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
    <input type="number" name="geburtsjahr" placeholder="Geburtsjahr" style="margin: .5rem; width: 100%" required min="1000" max="2100"><br>
    <label style="margin: .5rem">
        <input type="checkbox" name="partner">
        Hat Partner?
    </label><br>
    <input type="submit" value="Senden" style="margin: .5rem; width: 100%">
</form>
</body>
</html>
