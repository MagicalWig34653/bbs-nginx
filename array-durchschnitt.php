<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
/*
$array_lenght = rand(50, 5000);


$array = [];
for ($i = 1; $i <= $array_lenght; $i++) {
    $array[] = rand(1, 2500);
}



$array_lenght = count($array);

$durchschnitt = 0;

foreach ($array as $index => $item) {
    $durchschnitt += $item;
}

$durchschnitt = $durchschnitt / $array_lenght;
echo $durchschnitt;

echo '<br>';
echo '<br>';
#########################################################
*/
$array_lenght = rand(100, 50000);

$array = [];
for ($i = 1; $i <= $array_lenght; $i++) {
    $array[] = rand(1, 2500);
}

$ausgabe = 0;
foreach ($array as $index => $item) {
    if (($item % 2) == 0) {
        $ausgabe += $item;
    }
}

echo $ausgabe;


echo '<br>';
echo '<br>';
#########################################################


$array2 = [
    1,
    3,
    6,
    90
];

$aufsteigend = true;
foreach ($array2 as $index => $item) {
    $vorheriges = $array2[$index - 1] ?? 0;
    if ($item < $vorheriges) {
        echo $item;
        echo '<br>';
        $aufsteigend = false;
        break;
    } else {
        echo $vorheriges . ' < ' . $item . '<br>';
    }
}
if ($aufsteigend) {
    echo 'Aufsteigend';
} else {
    echo 'Absteigend';
}

echo '<br>';
echo '<br>';
#########################################################

print_r($array2);