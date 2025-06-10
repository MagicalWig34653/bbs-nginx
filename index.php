<?php

$links = [
    'Zufallszahlen' => [
        'web' => 'zahlen_random.php'
    ],
    'Durchschnitt' => [
        'web' => 'array-durchschnitt.php'
    ],
    'Primzahlen' => [
        'web' => 'check-primezahlen.php'
    ],
    'Gleich-Ungleich' => [
        'web' => 'even-odd.php'
    ],
    'Fakultät' => [
        'web' => 'fakultät.php'
    ],
    'Magier' => [
        'web' => 'magier.php'
    ],
    'Monat' => [
        'web' => 'monat.php'
    ],
    'Noten' => [
        'web' => 'noten.php'
    ],
    'Funktionen' => [
        'web' => 'funktionen.php'
    ],
];
$github = 'https://github.com/MagicalWig34653/bbs-nginx';

?>

<!doctype html>
<html lang="de" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/src/color-modes.js"></script>
    <title>Linos BBS LF5 Scripte</title>
</head>
<body>
<main class="container p-3 d-flex justify-content-center flex-column">
    <div class="row p-3 d-flex justify-content-center align-items-center" style="font-size: 1rem">
        <a target="_blank" href="<?php echo $github ?>" style="text-decoration: none;"><i class="bi bi-github me-2" style="font-size: 2rem;text-decoration: none;"></i>Quellcode</a>
    </div>
    <div class="list-group">
        <?php

        foreach ($links as $name => $link) {
            echo '<a href="' . $link['web'] . '" class="list-group-item list-group-item-action">' . $name . '</a>';
        }

        ?>
    </div>
</main>
</body>
</html>
