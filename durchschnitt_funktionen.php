<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

/**
 * Calculates the sum of all integer values within the given array.
 *
 * @param array $array An array containing integer values to be summed.
 * @return float durchschnitt
 */
function array_durchschnitt(array $array): float
{

    if ((count($array) == 0) or (count($array) == 1 and $array[0] == 0)) {
//        throw new \InvalidArgumentException('Array must not be empty. (Dividing by zero is not possible)');
        throw new \DivisionByZeroError('Array must not be empty. (Dividing by zero is not possible)');
    }

    $summe = 0;
    foreach ($array as $item) {
        $summe += $item;
    }

    return $summe / count($array);
}


echo array_durchschnitt([
    1,
    2,
    3,
    4,
    5
]);
echo '<br>';
echo array_durchschnitt([
    0,
    2,
    3,
    200,
    142
]);

echo '<br>';
echo array_durchschnitt([
    0
]);

echo '<br>';
echo array_durchschnitt([]);