<?php


function begrüße(string $name, int $tageszeit = 1000): string
{
    if ($tageszeit < 1200) {
        return 'Guten Morgen ' . $name . '!';
    } elseif ($tageszeit < 1800) {
        return 'Guten Tag ' . $name . '!';
    } elseif ($tageszeit < 2400) {
        return 'Guten Abend ' . $name . '!';
    } else {
        return 'Hallo ' . $name . '!';
    }
}


echo begrüße('Max', rand(0, 2400));
echo "<br>";
echo begrüße('Maria', rand(0, 2400));