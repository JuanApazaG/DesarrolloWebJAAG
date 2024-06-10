function cargarBandejaEntrada(){
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('get','bandeja_entrada.php',true);
    ajax.onreadystatechange = function (){
        if (ajax.readyState == 4){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();

}
function mostrarRedactar() {
    var formulario = `
        <form id="formRedactar">
            <label>Correo:</label><br>
            <input type="email" id="correo" name="correo" required><br>
            <label>Asunto:</label><br>
            <input type="text" id="asunto" name="asunto" required><br>
            <label>Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" required></textarea><br>
            <button type="button" onclick="enviarCorreo()">Enviar</button>
        </form>
    `;
    document.getElementById('contenido').innerHTML = formulario;
}

function enviarCorreo() {
    var formData = new FormData(document.getElementById('formRedactar'));
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "redactar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            alert(ajax.responseText);
            document.getElementById('formRedactar').reset();
        }
    };
    ajax.send(formData);
}
function cargarCorreosEnviados() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "correos_enviados.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}

function verMensaje(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "ver_mensaje.php?id=" + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('contenido').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}