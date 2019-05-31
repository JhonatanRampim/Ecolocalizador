<?php
$server = "localhost";
$user = "root";
$senha = "";
$nomebd = "projeto_integrador";

$conn = mysqli_connect($server,$user,$senha,$nomebd);

mysqli_set_charset($conn,"utf8"); //seta utf8 para acentuação
date_default_timezone_set('America/Sao_Paulo'); //define horario
if(mysqli_connect_errno())
{
	echo "Falha ao conectar: ".mysqli_connect_error();
}
?>