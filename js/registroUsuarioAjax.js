
	$('.btnAcepRegistro').click(function(){

		var datos = $('.formRegistro').serialize();
		
		$.ajax({
			type: 'POST',
			url: 'db/registroUsuario.php',
			data: datos,
			success: function(resp){
				console.log("agregado");
			}
		});
	});

/*$('.btnAcepLogin').click(function(){
	var datos = $('.formLogin').serialize();

	$.ajax({
		type: 'POST',
		url: 'db/checkLogin.php',
		data: datos,
		success: function(resp){
			console.log("Sesion Iniciada");
			console.log(resp);
		}
	});
});*/