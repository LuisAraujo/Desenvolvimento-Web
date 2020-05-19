<?php
	class PessoaDAO{
		
		public $pessoa;
		
		function __construct($p){
			
			$this->pessoa = $p;
		}
		
		function inserirPessoa(){
			
			$sql = 'INSERT INTO PESSOA(id, nome, idade) VALUES(null, 
			'.$this->pessoa->nome.', '.$this->pessoa->idade.')';
			echo $sql;
		}	
		
		
	}
?>
