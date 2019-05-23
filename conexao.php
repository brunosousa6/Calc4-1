<?php

$host = "calcdemo.mysql.database.azure.com";
$usuario = "adm@calcdemo";
$senha = "111213calc@";
$bd = "login";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>