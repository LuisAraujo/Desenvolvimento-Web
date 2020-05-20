<?php


function getAllPessoas(){
	$pDao = new PessoaDao();
	$arrPessoas = $pDao->getAllPessoas();	
	json_encode( $arrPessoas);
}


?>