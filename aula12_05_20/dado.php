<?php

class c{
	
	public $nome;
	public $id;
}

$ob = new c();
$ob->nome = "LUIS ARAUJO";
$ob->id = 2;


echo json_encode( $ob );



?>