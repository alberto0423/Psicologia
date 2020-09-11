$(document).ready(function () {
	$("#data_user tr").on('click',function () {
		var dato = $(this).find('td:nth-child(1)').html();
		alert($("#asign").val(dato));

	});
//	GenerateSesiones();
	GenerateNewSession();
});

function GenerateNewSession() {
		$("#newSesison").hide();

		$("select[name = users]").change(function () {
				var obtenido	=	$("#users option:selected").length;
				var contenido	=	$(this).val();



			if (obtenido > 0)
			{
				//alert("Seleccionado " + $("#users option").each());
				$("#newSesison").show();
				var contet			=	$(this).val();
				var contentSelect 	= 	$(this).find('option:selected').text();
				$("#nameUser").val(contentSelect);

				if(contenido == 0)
				{
					$("#newSesison").hide();
				}


			}else
			{
				$("#newSesison").hide();
			}

		});
}

function GenerateSesiones() {
	var userArray	=	{};



	$("#users option").each(function () {

		var obtenido		=	$(this).val();
		userArray[this.id, obtenido];
	//	userArray[this.id]	=	$(this).val();
	//	var obtenido		=	$(this).val();
	//	var usersArray		= [].concat(obtenido)
	//	var definitveArray 	= 	usersArray.concat(obtenido);

		console.log(userArray);


	});
}
