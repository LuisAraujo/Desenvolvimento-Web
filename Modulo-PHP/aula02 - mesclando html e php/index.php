<?php
	$id = 01;
	$title = "Teste PHP";
	$conteudo = [];
	array_push($conteudo, "Testando linha 01");
	array_push($conteudo, "Testando linha 02");
	array_push($conteudo, "Testando linha 03");
	array_push($conteudo, "Testando linha 04");
	array_push($conteudo, "Testando linha 05");
	array_push($conteudo, "Testando linha 06");
	array_push($conteudo, "Testando linha 07");
?>

<html>
<head>
	<title> <?php echo $title ?> </title>
</head>
<?php
echo "<h1> String vinda do PHP </h1>";

echo "<div style='background-color: #ff0'> Tags com estilo </div>";

echo "<div id='$id' class='title'> Div com Class e Id </div>";

//gerando lista com um loop e array
echo "<ul>";
	for($i=0; $i < count($conteudo); $i++){
		
		echo "<li> ". $conteudo[$i] ." </li>";	
	}
echo "</ul>";
?>


</html>