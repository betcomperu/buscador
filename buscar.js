/* $(document).ready(function() {
	$('#search_form').submit(function(event) {
		event.preventDefault(); // evitar la acción predeterminada del formulario
		
		var search_term = $('#search_term').val(); // obtener el término de búsqueda
		
		$.ajax({
			url: 'buscar.php', // la URL del archivo PHP que manejará la solicitud
			data: {search_term: search_term}, // el parámetro de búsqueda que se enviará al archivo PHP
			type: 'GET',
			success: function(response) {
				$('#search_results').html(response); // actualizar el elemento HTML con los resultados de la búsqueda
			}
		});
	});
});
 */