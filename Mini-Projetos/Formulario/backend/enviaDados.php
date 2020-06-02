<?php
include("conect_bd.php");
include("Model/Pessoa.php");
include("Model/PessoaDAO.php");
	
$nome = $_POST["nome"];
$_senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$imagem = $_FILES["imagem"];
$target_file = "imagens/";
$namefile = $target_file."". uniqid() ."".$imagem["name"];

if ( move_uploaded_file( $imagem["tmp_name"], $namefile ) ){

	$p = new Pessoa(1, $nome, $_senha , $sexo, $namefile );
	$pDao = new PessoaDAO($p);
	
	//Inserindo uma pessoa
	echo $pDao->inserirPessoa();
	
} else{
	echo "error";
}

?>