<?php
	include("conect_bd.php");
	include("Model/Pessoa.php");
	include("Model/PessoaDAO.php");
	
	$p = new Pessoa(1, "Luis", 29);
	$pDao = new PessoaDAO($p);
	//Inserindo uma pessoa
	$pDao->inserirPessoa();
	
	//Exibindo todas as Pessoas
	$array = $pDao->getAllPessoas();
	
	for($i = 0; $i  < count($array); $i++){
		echo "<div>ID: ". $array[$i]->id ." NOME: ". $array[$i]->nome  ." IDADE: ". $array[$i]->idade ." </div>";
	}
	
	//Deletando uma pessoa com o objeto advindo do Banco
	$pDao2 = new PessoaDAO($array[0]);
	$pDao2->deletarPessoa();
	
?>
