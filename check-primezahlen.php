<?php

$zahlen = [
    2,
    3,
    5,
//    6
];

$allPrime = true;
foreach ($zahlen as $z) {
    if (gmp_prob_prime($z) == 0) $allPrime = false;
}

if ($allPrime) {
    echo 'Prime';
} else {
    echo 'not Prime';
}