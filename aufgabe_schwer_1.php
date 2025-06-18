<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

function berechne_durchschnitt(array $array): float
{
    if (count($array) == 0) throw new \DivisionByZeroError('Array must not be empty. (Dividing by zero is not possible)');
    $summe = 0;
    foreach ($array as $item) {
        $summe += $item;
    }
    return $summe / count($array);
}


$noten = [];
for ($i = 0; $i < 6; $i++) {
    $noten[] = rand(1, 6);
}

echo implode(', ', $noten);
echo '<br>';
echo '<br>';

/**
 * @param array $noten
 * @return bool
 */
function pruefungBestanden(array $noten): bool
{
    $fünf_vorhanden = 0;
    $sechs_vorhanden = false;
    foreach ($noten as $item) {
        if ($item == 5) $fünf_vorhanden++;
        if ($item == 6) $sechs_vorhanden = true;
    }

    $bestanden = true;
    if (
        ($fünf_vorhanden > 1) or
        $sechs_vorhanden or
        !(berechne_durchschnitt($noten) < 4)
    ) $bestanden = false;
    return $bestanden;
}

$bestanden = pruefungBestanden($noten);

//if ($bestanden) {
//    echo 'Bestanden';
//} else {
//    echo 'Nicht bestanden';
//}


echo(pruefungBestanden($noten) ? 'Bestanden' : 'Nicht bestanden');


$array = [
    "Note1" => 1,
    "Note2" => 2,
    "Note3" => 3,
    "Note4" => 4
];