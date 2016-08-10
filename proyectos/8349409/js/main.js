$(document).ready(function(){
	if (/registrarse/.test(window.location.href)){
		var clave, 
			clave1,
			iguales;

		function validate(){
			if(clave != null){
				if(!iguales){
					$('.alert').removeClass('hidden');
				}
				else{
					$('.alert').addClass('hidden');
				}
			}
		}

		$("#clave").on("change paste keyup", function() {
			clave = $(this).val(); 
		});
		$("#clave1").on("change paste keyup", function() {
			clave1 = $(this).val();
			if(clave1 === clave){
				iguales = true;
			}else{
				iguales = false;
			}
			validate();
		});
	}
	
});
		