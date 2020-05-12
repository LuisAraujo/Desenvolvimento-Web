<?php
$myObj->nome = "Luis Araujo";
$myObj->idade = 29;
$myObj->cidade = "Feira de Santana";

$myJSON = json_encode($myObj);

echo $myJSON;
?>