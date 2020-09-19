$(document).ready(function () {
	seleccion();
	dropdowSelector();
	getDataUsers();
//	datePicker();
	getDateInputs();


});


function datePicker() {
	$("#datepicker").datepicker({
		changeMonth: true,
		changeYear: true
	});
}


function seleccion() {
	$("#example tr").on('click', function () {
		var dato = $(this).find('td:nth-child(1)').html();
		//	alert($("#asign").val(dato));
		$("#id_paciente").val(dato);

		//console.log(dato);

		//	return dato;
	});

}



function dropdowSelector() {
	$("select[name=users]").change(function () {


		//var dato = $(this).find('td:nth-child(1)').html();
		//$("#asign").val(dato);

		let selector	=	$("select[name=users]").val();




		//alert(selector);

			//console.log("El valor es: " + selector);
	});

}



function getDataUsers() {
	$.ajax(
		{
			type:"post",
			url:"",
			dataType: "json",
		//	data: {},


			success:function (response) {
					console.log(response)
			},
			error:function () {
			//	console.log("Hubo un error")
				//console.log(document.location.href);
			}
		}
	);

}

function getDateInputs() {

	$("#date_form").submit(function (e) {
		e.preventDefault();
		var dataRecipe = $(this).serializeArray();
		dataRecipe.push({name: 'form_date',value:'date'});



		$.ajax({
			url:  "validateForm",
			type: "post",
			data:  dataRecipe,

			beforeSend: function () {
				$('.spinner').css('display','inline');
			}

		})

			.done(function (data) {

				console.log(data)


				if (data == 0 || data == "")
				{
					setTimeout(function () {
						swal({
							title: "Campos Obligatorios",
							text: "Todos los campos son obligatorios, por favor verifique de nuevo",
							icon: "error",
							button: "Cerrar",
						});
					},1500);
				}else if(data == "1")
				{

					setTimeout(function () {
						swal({
							title: "Registrado con éxito!",
							text: "Registrado con éxito",
							icon: "success",
							button: "Cerrar",
						});

					}, 3500);

					setTimeout(function () {
						var actual = 	window.location.origin;
						window.location.replace(actual+'/psicologia/psicologiav2');
					},7000)

				}else if (data == "2")
				{

					setTimeout(function () {
						swal({
							title: "Número de cuenta previamente registrado",
							text: "Su número de cuenta ya se ha registrado con aterioridad",
							icon: "error",
							button: "Cerrar",
						});

						window.location.replace("http://jquery4u.com");

					},1500);


				}





			})
			.fail(function (data) {
			//	console.log(data);

				swal({
					title: "Error!",
					text: "Error",
					icon: "warning",
					button: "Cerar",
				});


			})




			.always(function () {

				setTimeout(function () {
					$(".spinner").hide();
				},3500);

			})






	});
}
