<?php
# Error Reporting
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

$zahl1 = rand(0, 25);
$zahl2 = rand(0, 25);
$zahl3 = rand(0, 25);
$zahl4 = rand(0, 25);


echo "<style>

body {
    font-family: -apple-system, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}


</style>";


if (isset($_GET['bla'])) {
    $zahl1 = rand(0, 250);
    echo sqrt($_POST['n1']) * $_POST['n2'];
    die('<meta http-equiv="refresh" content="2; URL=https://bbs-nginx.linolaske.de/">');
}

?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <meta http-equiv="refresh" content="1">-->
    <title>BBS-NGINX</title>
</head>
<body style="min-height: 90vh; font-size: 3vw">


<div id="container">
    <p>Zahl1: <b><?php echo $zahl1 ?></b></p>
    <p>Zahl2: <b><?php echo $zahl2 ?></b></p>
    <p>Zahl3: <b><?php echo $zahl3 ?></b></p>
    <p>Zahl4: <b><?php echo $zahl4 ?></b></p>
    <p>=====================</p>
    <p>Ergebnis: <b><span style="color: <?php echo (
                ($zahl1 + $zahl2 + $zahl3 + $zahl4) == 50) ? 'deepskyblue' : ((($zahl1 + $zahl2 + $zahl3 + $zahl4) > 50) ? 'limegreen' : 'red') ?>"><?php echo $zahl1 + $zahl2 + $zahl3 + $zahl4 ?> (<?php echo (($zahl1 + $zahl2 + $zahl3 + $zahl4) > 50) ?
                    'Bestanden' : 'nicht Bestanden' ?>)</span></b></p>
</div>


<!--<form method="POST" action="?bla">-->
<!--    <input type="number" name="n1" placeholder="Nummer 1"/>-->
<!--    <input type="number" name="n2" placeholder="Nummer 2"/>-->
<!--    <button type="submit">OK</button>-->
<!--</form>-->
</body>
<script>
    setTimeout(() => {
        window.location.reload();
    }, 250)
</script>
</html>
