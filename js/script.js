$(document).ready(function() {
    // Captura del evento de cambio en el campo de búsqueda
    $("#search").on("keyup", function() {
        var search = $(this).val();
        
        // Verificación de si la cadena de búsqueda está vacía
        if (search == "") {
            $("#table tbody").html("");
            return;
        }
        
        // Petición Ajax al archivo PHP
        $.ajax({
            url: "search.php",
            type: "GET",
            data: {search: search},
            success: function(response) {
                $("#table tbody").html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
