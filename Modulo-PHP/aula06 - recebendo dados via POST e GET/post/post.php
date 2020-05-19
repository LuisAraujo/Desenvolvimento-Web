<?php
	include("../Pessoa.php");
	
	//obtem dados no padrão url?atributo&valor;atributo&valor...
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	echo "Dados vindos do HTML <br>";
	echo $nome ."<br>"; 
	
	echo $idade; 
	//usando dados via get para o objeto
	$p = new Pessoa($nome, $idade);

?>
