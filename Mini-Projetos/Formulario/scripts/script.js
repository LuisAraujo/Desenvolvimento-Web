$(document).ready( function(){
	
	$("#myform").submit (function(e){
		event.preventDefault();
		
		var dados = new FormData(this);
		
		$.ajax({
			url: "backend/enviaDados.php",
			data:  dados,
			//dataType:"json",
			type: "post",
			contentType: false,
            processData: false,
			
		}).done (function(data){
			
			if(data){
				$("#txt-modal").html("Dados Enviados com Sucesso!");
				$("#exampleModal").modal();
				console.log("ok");
			}else{
				
			}
			
		}).fail(function(data){
			
			$("#txt-modal").html("Ocorreu um erro ao enviar os dados!");
		
		});
	
		
	});
	
});