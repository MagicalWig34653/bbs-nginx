<?php

if (isset($_GET['a'])) {
    $zahl = filter_input(INPUT_POST, 'zahl');

    if (($zahl % 2) == 0)
        echo 'Even';
    else
        echo 'Odd';

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
    <input type="number" name="zahl" placeholder="Zahl" style="margin: .5rem; width: 100%" required><br>
    <input type="submit" value="Senden" style="margin: .5rem; width: 100%">
</form>
</body>
</html>
