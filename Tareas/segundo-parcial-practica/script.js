function cargarMenu() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `menu.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('menu').innerHTML = ajax.responseText;
        }
    };
    ajax.send();
}

function colocarMensaje() {
    var mensaje = document.getElementById('mensaje');
    var nombre = "Juan Agustin Apaza"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    var carnet = "35-5228"; // Puedes reemplazar "Tu Carnet" con tu número de carnet real
    mensaje.innerHTML = 'Nombre: ' + nombre + ', Carnet Universitario: ' + carnet;
}


function pregunta2() {
    fetch("galeria.php")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById('menu').innerHTML = data;
        agregarFuncionesLibros();
    });
}

function agregarFuncionesLibros() {
    let botones = document.querySelectorAll(".imagen-boton");
    botones.forEach((boton) => {
        boton.addEventListener("click", function () {
            let fullSrc = boton.querySelector("img").src;
            let src = fullSrc.split("/").pop();
            document.getElementById('principal').innerHTML = `<img src="${fullSrc}" alt="imagen" style="max-width:100%;max-height:100%;display:block;margin:auto;" />`;
            document.getElementById('mensaje').innerHTML = src;
        });
    });
}

function pregunta3() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `login.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('principal').innerHTML = ajax.responseText;
            document.getElementById('mensaje').innerHTML = "";
        }
    };
    ajax.send();
}

function loguearse() {
    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
    var captcha = document.getElementById("captcha").value;

    var data = new FormData();
    data.append('usuario', usuario);
    data.append('password', password);
    data.append('captcha', captcha);

    fetch("autenticar.php", {
        method: "POST",
        body: data
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('principal').innerHTML = `<div style="background-color: red; color: white; padding: 10px; text-align: center;">${data.mensaje}</div>`;
            cargarMenu();
        } else {
            document.getElementById('mensaje2').innerHTML = data.mensaje;
        }
    });
}
///////////////////


function listarLibros() {
    fetch("listar.php")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById('principal').innerHTML = data;
    });
}

function editarLibro(id) {
    // Aquí puedes agregar la funcionalidad para editar el libro
    alert("Editar libro con ID: " + id);
}

function eliminarLibro(id) {
    // Aquí puedes agregar la funcionalidad para eliminar el libro
    alert("Eliminar libro con ID: " + id);
}

// Agregar el evento para el botón 4
document.querySelector(".boton:nth-child(4)").addEventListener("click", listarLibros);
