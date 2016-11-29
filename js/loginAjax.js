$('.formLogin').submit(function(event){
		var datos = $('.formLogin').serialize();
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'db/checkLogin.php',
			data: datos,
			success: function(resp){
				if (resp ==1) {
					$('.modalLogin').modal('hide');
					location.reload();
				}else{
					$("#alert").attr({
					  class: "alert alert-danger alert-dismissible",
					  role: "alert"
					});
					$('.alert').append("<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Error!</strong> Usuario y/o Contraseña Incorrecta");
				}
			}
		});
});