$(document).ready(function() {
    $.ajax({
        url: 'personas.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            renderizarTabla(data);
        },
        error: function(xhr, status, error) {
            console.error('Error al obtener los datos:', error);
        }
    });
});

function renderizarTabla(data) {
    var tbody = $('#tabla-personas tbody');
    tbody.empty();

    for (var i = 0; i < data.length; i++) {
        var fila = $('<tr>').appendTo(tbody);
        fila.addClass(i % 2 === 0 ? 'fila-par' : 'fila-impar');
        
        $('<td>').text(data[i].id).appendTo(fila);
        $('<td>').text(data[i].nombre).appendTo(fila);
        $('<td>').text(data[i].edad).appendTo(fila);
        // Agrega aquí más columnas si es necesario
    }
}
