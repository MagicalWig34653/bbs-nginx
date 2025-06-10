<?php


function begruesse(string $name): string
{
    return 'Hallo ' . $name;
}


echo begruesse('Max');
echo '<br>';
echo begruesse('Maria');