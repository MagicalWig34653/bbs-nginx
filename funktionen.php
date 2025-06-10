<?php


function begrüße(string $name): string
{
    return 'Hallo ' . $name . '!';
}


echo begrüße('Max');
echo '<br>';
echo begrüße('Maria');