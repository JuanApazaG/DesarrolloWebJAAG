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
function mostrarLibros() {
    fetch('listar.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('principal').innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Función para editar un libro (debes implementarla)
function editar(id) {
    console.log('Editar libro con ID:', id);
    // Aquí puedes agregar el código para editar el libro
}

// Función para eliminar un libro (debes implementarla)
function eliminar(id) {
    console.log('Eliminar libro con ID:', id);
    // Aquí puedes agregar el código para eliminar el libro
}

function mostrarDatosLibros() {
    fetch('datos.php')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let select = document.createElement('select');
                select.id = 'librosSelect';
                select.onchange = actualizarImagen;

                data.libros.forEach(libro => {
                    let option = document.createElement('option');
                    option.value = libro.imagen;
                    option.textContent = libro.titulo;
                    select.appendChild(option);
                });

                document.getElementById('mensaje').innerHTML = '';
                document.getElementById('mensaje').appendChild(select);

                // Mostrar la primera imagen por defecto
                if (data.libros.length > 0) {
                    document.getElementById('principal').innerHTML = `<img src="${data.libros[0].imagen}" alt="${data.libros[0].titulo}" style="max-width:100%;max-height:100%;display:block;margin:auto;" />`;
                }
            } else {
                document.getElementById('mensaje').innerHTML = data.mensaje;
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function actualizarImagen() {
    let select = document.getElementById('librosSelect');
    let imagen = select.value;
    document.getElementById('principal').innerHTML = `<img src="${imagen}" alt="imagen" style="max-width:100%;max-height:100%;display:block;margin:auto;" />`;
}
