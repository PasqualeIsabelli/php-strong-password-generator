<?php
$project_title = 'PHP Strong Password Generator';

$password_length = $_GET['password_length'] ?? null;
// var_dump($password_length);

$lettere_minuscole = 'abcdefghijklmnopqrstuvwxyz';
$lettere_maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '0123456789';
$simboli = '!@#$%&*-_+/?';

$password_characters = $lettere_minuscole . $lettere_maiuscole . $numeri . $simboli;

$password_generate = substr(str_shuffle($password_characters), 0, $password_length);
// var_dump($password_generate);
?>