<?php
	include("../Pessoa.php");
	
	//obtem dados no padrão url?atributo&valor;atributo&valor...
	$nome = $_GET["nome"];
	$idade = $_GET["idade"];
	
	echo "Dados vindos da URL <br>";
	echo $nome ."<br>"; 
	echo $idade; 
	//usando dados via get para o objeto
	$p = new Pessoa($nome, $idade);

?>
