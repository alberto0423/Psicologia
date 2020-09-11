$(document).ready(function () {
	HideInputs();
});


/*
*	Método que oculta y muestra el input de materias adeudadas.
*
 */
function HideInputs() {
	$("select[name = adeudos]").change(function () {

		var obtenido = $(this).val();


		if ($(this).val() == 2) {

			$('input[name=recurse]').hide();
			$('#materias_deudas').hide();

			$('#rendimiento').hide();
			$('input[name=rendimiento]').hide();


		} else {
			$('input[name=recurse]').show();
			$('#materias_deudas').show();

			$('input[name=rendimiento]').show()
			$('#rendimiento').show();


		}


	});
}


/*
*	Método que recibe los datos de los inputs por ajax
*
 */


