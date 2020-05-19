<?php
	include("Pessoa.php");
	//essa classe poderia está em um arquivo separado, mas está aqui
	//para perceberem que é possível mescar classes e instancias...
	class Grupo{
		public $pessoas;

		function __construct(){
			 $this->pessoas = array();
		}
		
		function addPessoas($p){
			array_push($this->pessoas, $p);
		}	

		function showPessoas(){
			foreach ($this->pessoas as $p) {
				//printando nome e idade (como um toString())
				echo 'Nome: '. (  $p->nome ).' - Idade '.(  $p->nome ).'<br>';
			}
		}
	}
	
	
	//usando classe do arquivo incluido
	$p = new Pessoa("Luis", 10);
	//printando atributos
	echo $p->nome;
	echo $p->idade;
	echo "<br>";
	
	$p2 = new Pessoa("Luis", 10);
	
	//classe neste arquivo
	$g = new Grupo();
	
	$g->addPessoas($p);
	$g->addPessoas($p2);
	
	$g->showPessoas();
	
	
?>
