<?php
	class PessoaDAO{
		
		public $pessoa;
		
		function __construct($p){
			$this->pessoa = $p;
		}
		
		function inserirPessoa(){	
			abrirConexao();
			global $mysqli;
			
			$sql = 'INSERT INTO PESSOA(id, nome, idade) VALUES(null, 
			"'.$this->pessoa->nome.'", '.$this->pessoa->idade.')';
			$resultado = $mysqli->query( $sql );

			fecharConexao();
			return $resultado;
		}	
		
		function deletarPessoa(){
			abrirConexao();
			global $mysqli;
			
			$sql = "DELETE FROM PESSOA WHERE id = ". $this->pessoa->id;
			$resultado = $mysqli->query( $sql );
			
			fecharConexao();
			return $resultado;
			
		}
		
		
		function getAllPessoas(){
			abrirConexao();
			global $mysqli;
			
			$sql = 'SELECT * FROM Pessoa ORDER BY nome';
			$resultado = $mysqli->query( $sql );
			
			$row1 = $resultado->fetch_all(MYSQLI_ASSOC);
			$array = array();
			for($i = 0; $i  < count($row1); $i++){
				
				$p = new Pessoa( $row1[$i]["id"], $row1[$i]["nome"],$row1[$i]["idade"]);
				echo $row1[$i]["id"]."<br>";
				array_push($array, $p);
				
			}
			
			fecharConexao();
			
			return $array;
			
		}
		
	}
?>
