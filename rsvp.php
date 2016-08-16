<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') die();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$attendant = $_POST['attendant'];

if ($firstname == '' || $attendant == '')
{
	echo "As informações devem ser preenchidas";

	die();
}

$body = "Nome: $firstname $lastname\nEmail: $email\nTelefone: $phone\nConfirmado: $attendant";

if(mail("casamentotiagoecamila@gmail.com","RSVP", $body))
	echo "Obrigado pela confirmação";
else
	echo "Falha ao realizar confirmação, tente novamente ou através do fone: 41 8418-0299 (Tiago)";
?>
