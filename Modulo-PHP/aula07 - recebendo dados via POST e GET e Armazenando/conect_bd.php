<?php

$host = "localhost";
$banco = "BD_ModuloPHP";
$usuario = "root";
$senha = "";

$mysqli;

function abrirConexao(){
	global $mysqli, $host, $usuario, $senha, $banco;
	$mysqli = new mysqli($host,$usuario,$senha,$banco);

	if($mysqli->connect_errno) {
		exit();
	}
}

function fecharConexao(){
	global $mysqli;
	$mysqli->close();
}

?>