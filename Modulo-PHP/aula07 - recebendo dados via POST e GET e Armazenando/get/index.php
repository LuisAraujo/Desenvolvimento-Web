<?php
	include("../conect_bd.php");
	include("../Model/Pessoa.php");
	include("../Model/PessoaDAO.php");
	
	//obtem dados no padrão url?atributo&valor;atributo&valor...
	$nome = $_GET["nome"];
	$idade = $_GET["idade"];
	
	echo "Dados vindos da URL <br>";
	
	//usando dados via get para o objeto
	$p = new Pessoa(-1,$nome, $idade);
	$pDao = new PessoaDAO($p);
	$pDao->inserirPessoa();

?>
