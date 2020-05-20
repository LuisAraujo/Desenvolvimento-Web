<?php

include("../conect_bd.php");
include("../Model/Pessoa.php");
include("../Model/PessoaDAO.php");

$req = $_POST["requisicao"];

if($req == "getallpessoas"){
	getAllPessoas();
	
}else if($req == "inserirpessoa"){
	
	$nome =    $_POST["nome"];
	$idade =   $_POST["idade"];
	
	insertPessoa($nome, $idade);
	
}else if($req == "deletarpessoa"){
	$id =  $_POST["id"];
	deletePessoa($id);
}



function getAllPessoas(){
	$pDao = new PessoaDao(null);
	$arrPessoas = $pDao->getAllPessoas();
	echo json_encode( $arrPessoas );
}

function insertPessoa($nome, $idade){
	$pDao = new PessoaDao(new Pessoa(-1, $nome, $idade));
	$arrPessoas = $pDao->inserirPessoa();	
	echo json_encode( $arrPessoas );
}

function deletePessoa($id){
	$pDao = new PessoaDao( new Pessoa($id, "", "") );
	$arrPessoas = $pDao->deletarPessoa();
	echo json_encode( $arrPessoas );
}

?>