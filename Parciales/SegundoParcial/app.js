function cargarMenu() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `datos.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('titulo').innerHTML = ajax.responseText;
            pregunta1();
        }
    };
    ajax.send();
}

function pregunta1() {
    fetch("datos.html")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById('sub-menu').innerHTML = data;
        agregarFuncionesLibros();
    });

    var mensaje = document.getElementById('titulo');
    var nombre = "pregunta 1"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    mensaje.innerHTML = nombre ;
}

function loguearse(num1,num2) {
    fetch("datos.html")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById('contenido').innerHTML = data;
        var num1 = num1;
        var num2 = num2;
        document.write('<table class="tabla">');
        for (var f = 0; f < num1; f++) {
            document.write("<tr>");
            for (var c = 0; c < num2; c++) document.write("<td>&nbsp;</td>");
            document.write("</tr>");
        }
        mensaje.innerHTML = document.write("</table>");
    });

    // var mensaje = document.getElementById('titulo');
    // var nombre = "pregunta 1"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    // mensaje.innerHTML = nombre ;

    // var mensaje = document.getElementById('contenido');
    // var num1 = num1;
    // var num2 = num2;
    // document.write('<table class="tabla">');
    // for (var f = 0; f < num1; f++) {
    //     document.write("<tr>");
    //     for (var c = 0; c < num2; c++) document.write("<td>&nbsp;</td>");
    //     document.write("</tr>");
    // }
    // mensaje.innerHTML = document.write("</table>");
}

function agregarFuncionesLibros() {
    let botones = document.querySelectorAll(".imagen-boton");
    botones.forEach((boton) => {
        boton.addEventListener("click", function () {
            let fullSrc = boton.querySelector("img").src;
            let src = fullSrc.split("/").pop();
            document.getElementById('contenido-img').innerHTML = `<img src="${fullSrc}" alt="imagen" style="max-width:100%;max-height:100%;display:block;margin:auto;" />`;
            document.getElementById('contenido-informacion').innerHTML = src;
        });
    });
}



function pregunta2() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `prueba2.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('sub-menu').innerHTML = ajax.responseText;
            
        }
    };
    ajax.send();

    var mensaje = document.getElementById('titulo');
    var nombre = "pregunta 2"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    mensaje.innerHTML = nombre ;
}



//pregunta 3
function pregunta3() {
    fetch("galeria.php")
    .then((response) => response.text())
    .then((data) => {
        document.getElementById('sub-menu').innerHTML = data;
        agregarFuncionesLibros();
    });

    var mensaje = document.getElementById('titulo');
    var nombre = "pregunta 3"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    mensaje.innerHTML = nombre ;
}

function agregarFuncionesLibros() {
    let botones = document.querySelectorAll(".imagen-boton");
    botones.forEach((boton) => {
        boton.addEventListener("click", function () {
            let fullSrc = boton.querySelector("img").src;
            let src = fullSrc.split("/").pop();
            document.getElementById('contenido').innerHTML = `<img src="${fullSrc}" alt="imagen" style="max-width:100%;max-height:100%;display:block;margin:auto;" />`;
            document.getElementById('').innerHTML = `<label src="${src}" style=""/>`;
        });
    });
}



//pregunta 4

function pregunta4(){
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `pregunta4.php`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('sub-menu').innerHTML = ajax.responseText;
            mostrar();
        }
    };
    ajax.send();

    var mensaje = document.getElementById('titulo');
    var nombre = "pregunta 4"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    mensaje.innerHTML = nombre ;
    mostrar();
}

function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            personas = JSON.parse(ajax.responseText)
            console.log(personas);
            contenido.innerHTML = "";
            let elementotabla = document.createElement("table");
            contenido.appendChild(elementotabla);
            let elementotr = document.createElement("tr");
            elementotr.style.backgroundColor = "blue";
            elementotr.style.color = "white";
            elementotabla.appendChild(elementotr);
            var elementotd = document.createElement("td");
            var elementotd2 = document.createElement("td");
            var elementotd3 = document.createElement("td");
            var elementotd4 = document.createElement("td");
            var elementotd5 = document.createElement("td");
            elementotr.appendChild(elementotd);
            elementotr.appendChild(elementotd2);
            elementotr.appendChild(elementotd3);
            elementotr.appendChild(elementotd4);
            elementotr.appendChild(elementotd5);
            elementotd.innerHTML = "Imagen";
            elementotd2.innerHTML = "Titulo";
            elementotd3.innerHTML = "Autor";
            elementotd4.innerHTML = "Editorial";
            elementotd5.innerHTML = "Año";
            for (i = 0; i < personas.length; i++) {
                let elementotr = document.createElement("tr");
                elementotabla.appendChild(elementotr);
                if (i % 2 == 0) {
                    elementotr.style.backgroundColor = "white";
                } else {
                    elementotr.style.backgroundColor = "gray";
                }

            let elementotd = document.createElement("td");
            let elementotd2 = document.createElement("td");
            let elementotd3 = document.createElement("td");
            let elementotd4 = document.createElement("td");
            let elementotd5 = document.createElement("td");
            let fotografia = document.createElement("img");
            fotografia.width = 50;
            fotografia.src='images/'+personas[i].imagen;
            elementotr.appendChild(elementotd);
            elementotr.appendChild(elementotd2);
            elementotr.appendChild(elementotd3);
            elementotr.appendChild(elementotd4);
            elementotr.appendChild(elementotd5);
            elementotd.appendChild(fotografia);
            elementotd2.innerHTML = personas[i].imagen;
            elementotd3.innerHTML = personas[i].titulo;
            elementotd4.innerHTML = personas[i].autor;
            elementotd5.innerHTML = personas[i].editorial;
            elementotd6.innerHTML = personas[i].ano;
            }
        }
    }
    ajax.send();
}


//pregunta 5

function pregunta5(){
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `pregunta5.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('sub-menu').innerHTML = ajax.responseText;
            
        }
    };
    ajax.send();

    var mensaje = document.getElementById('titulo');
    var nombre = "pregunta 5"; // Puedes reemplazar "Tu Nombre" con tu nombre real
    mensaje.innerHTML = nombre ;
    mostrar();
}