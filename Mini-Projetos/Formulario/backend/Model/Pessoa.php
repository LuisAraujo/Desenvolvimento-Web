<?php
	class Pessoa{
		public $id;
		public $nome;
		public $sexo;
		public $senha;
		public $img;

		function __construct($id, $nome, $senha, $sexo, $img){
			$this->id = $id;
			$this->nome = $nome;
			$this->sexo = $sexo;
			$this->senha = $senha;
			$this->img = $img;
		}	
		
		
	}
?>
