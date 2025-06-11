<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

/**
 * Berechnet den Durchschnitt der Zahlen in einem Array.
 *
 * @param array $array Ein Array von Zahlen, dessen Durchschnitt berechnet werden soll.
 *                      Das Array darf nicht leer sein oder nur den Wert 0 enthalten.
 * @return float Der Durchschnittswert der Zahlen im Array.
 * @throws \DivisionByZeroError Wenn das Array leer ist oder nur den Wert 0 enthält.
 */
function berechne_durchschnitt(array $array): float
{

    if (count($array) == 0) throw new \DivisionByZeroError('Array must not be empty. (Dividing by zero is not possible)');


    $summe = 0;
    foreach ($array as $item) {
        $summe += $item;
    }

    return $summe / count($array);
}


echo berechne_durchschnitt([
    1,
    2,
    3,
    4,
    5
]);

###############################################


echo '<br>';
try {
    echo berechne_durchschnitt([
        0,
        2,
        3,
        200,
        142
    ]);
} catch (\DivisionByZeroError $e) {
    echo $e->getMessage();
}

###############################################


echo '<br>';
try {
    echo berechne_durchschnitt([
        0
    ]);
} catch (\DivisionByZeroError $e) {
    echo $e->getMessage();
}


###############################################

echo '<br>';
try {
    echo berechne_durchschnitt([]);
} catch (\DivisionByZeroError $e) {
    echo $e->getMessage();
}
