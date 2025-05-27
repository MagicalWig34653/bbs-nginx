<?php

$noten = [
    'Tom' => [
        5,
        3,
        2,
        6,
        1
    ],
    'Hannelore' => [
        4,
        2,
        6,
        6,
        6,
        1
    ],
    'Justus' => [
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1
    ]
];


foreach ($noten as $index => $schüler) {
    echo '<h2>' . $index . '</h2>';
    $durchschnitt = array_sum($schüler) / count($schüler);
    echo '<p>Durchschnitt: ' . round($durchschnitt, 2) . '</p>';
    echo '<p>Noten: ' . implode(', ', $schüler) . '</p>';


    echo "<br>";
}