<?php
// iniciar uma sess�o
session_start();
 
if (empty($_SESSION['id'])) {
 
	// n�o existe sess�o iniciada
	// neste caso, levamos o utilizador para a p�gina de login
	header('Location: login.php');
	exit();
}
?>