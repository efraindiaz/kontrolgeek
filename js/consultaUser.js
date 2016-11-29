$(document).ready(function(){
		
		$.ajax({
			type: 'POST',
			dataType: 'JSON',
			url: 'db/consultaUsuario.php',

			success: function(data){
				console.log(data);
				$('.nombre').val(data.nombre);
				$('.apellido').val(data.apellido);
				$('.nombreU').val(data.nombreUsuario);
				$('.email').val(data.email);
				$('.telefono').val(data.telefono);
				$('.ciudad').val(data.ciudad);
				$('.estado').val(data.estado);
				$('.codigop').val(data.codigo_postal);
				$('.colonia').val(data.colonia);
				$('.calle').val(data.calle);
				$('.email').val(data.email);
				$('.NuInterior').val(data.Nu_interior);
				$('.NuExterior').val(data.Nu_exterior);
				$('.passwordHidden').val(data.password);
			}
		});
});

$('.formEdit').submit(function(event){
		var datos = $('.formEdit').serialize();
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'db/editUsuario.php',
			data: datos,
			success: function(resp){
				alert('Datos Guardados Exitosamente');
				location.reload();
			}
		});
});
