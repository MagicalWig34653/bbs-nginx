<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);


include 'simple_query_builder.php';

$user = new User();


/*$user->new_email = 'heinrich@example.com';
$user->new_username = 'Heinrich';
$user->new_wohnort = 'Hamburg';
$user->save();*/

$users = $user->get_all();
