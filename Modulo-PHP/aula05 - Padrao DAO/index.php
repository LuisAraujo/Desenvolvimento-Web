<?php
	include("Model/Pessoa.php");
	include("Model/PessoaDAO.php");
	
	$p = new Pessoa(1, "Luis", 29);
	$pDao = new PessoaDAO($p);
	$pDao->inserirPessoa();
	
?>
