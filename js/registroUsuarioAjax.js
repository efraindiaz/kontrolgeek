$('.formRegistro').submit(function(event){

		var datos = $('.formRegistro').serialize();
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'db/registroUsuario.php',
			data: datos,
			success: function(resp){
				console.log(resp);
				if (resp == 1) {
					$('.modalRegistro').modal('hide');
					location.reload();
				}else{
					$('.bodyRegistro .row #alert').attr({
					  class: "alert alert-danger alert-dismissible",
					  role: "alert"
					});
					$('.alert').append("<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Error!</strong> Las Contraseñas No Coinciden");
				}
			}
		});
		
});
