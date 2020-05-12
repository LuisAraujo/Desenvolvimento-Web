<?php
class foo
{
    public $nome = "";
	public $idade = 0;
	public $cidade = "";
}

$myObj = new foo();
$myObj->nome = "Luis Araujo";
$myObj->idade = 29;
$myObj->cidade = "Feira de Santana";

$myJSON = json_encode($myObj);

echo $myJSON;

?>