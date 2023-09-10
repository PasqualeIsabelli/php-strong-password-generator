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

if ($password_length = 'not_selected') {
  $password_length = 'null';
  $password_generate = 'Impossibile generare la password! Seleziona prima la lunghezza caratteri della password.';
}
?>