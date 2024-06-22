let selected = 'SIS256'
let numero = 0

let asignuturas = document.querySelectorAll('.asignatura')
asignuturas.forEach(asignatura => {
    asignatura.addEventListener('click', () => {
        // Actualiza la variable 'selected' con el contenido de la asignatura seleccionada
        selected = asignatura.innerHTML
        // Cambia la clase CSS de la asignatura seleccionada para reflejar la selección visualmente
        document.querySelector('.selected').classList.remove('selected')
        asignatura.classList.add('selected')
        
        // Divide el contenido del título en palabras y verifica la longitud del array resultante
        palabras = menu.innerHTML.split(' ')
        if(palabras.length > 1){
            // Ejecuta una función específica según la primera palabra del título
            switch (palabras[0]) {
                case 'Lista':
                    obtenerTabla();
                    break;
                case 'Horario':
                    pregunta3();
                    break;
                case 'Calificaciones':
                    pregunta4();
                    break;
            }
        }
    })
})


// Función que establece el contenido de la página al estado inicial
function inicio() {
    let contadorElemento = document.getElementById("contador");

    // Recuperar el valor del contador, si no existe, inicializarlo a 0
    let count = parseInt(contadorElemento.getAttribute("data-count")) || 0;
    count++;
    
    // Actualizar el contenido y el atributo del contador
    contadorElemento.textContent = count;
    contadorElemento.setAttribute("data-count", count);

    document.getElementById("menu").innerHTML = 'Inicio';
    document.getElementById("contenido").innerHTML = `
        <div class="informacion">
            <div class="cabecera-informacion">
                <h3>SIS 256 Programación Web</h3>
                <p>Examen Final</p>
            </div>
            <img src="./images/yo.png" alt="imagen" height="120px" width="120px">
            <div class="footer-informacion">
                <h4>Nombre Completo Estudiante: Juan Agustin Apaza Guzman</h4>
                <p>Carrera: Ingenieria de Sistemas</p>
                <p>Repositorio:<a href="https://github.com/JuanApazaG/DesarrolloWebJAAG.git" target="_blank"> haga click aqui </a></p>
            </div>
        </div>`;
}

// Evento para cambiar el color de fondo de los elementos seleccionados
document.getElementById("input-color").addEventListener("input", function() {
    const selectedId = document.getElementById("select-ids").value;
    const color = this.value;
    document.getElementById(selectedId).style.backgroundColor = color;
});
//pregunta 2

function insertarAlumno() {
    window.location.href = 'insertar.html';
}

function eliminarAlumno() {
    fetch('pregunta2.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'accion=eliminar'
    }).then(response => response.text())
      .then(data => {
          window.location.reload();
      });
}

function pregunta2() {
    window.location.href = 'pregunta2.php';
}



///fin pregunta 2
function pregunta3(){
    menu.innerHTML = `Horario ${selected}`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `horario.php?materia=${selected}`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

// Función que obtiene y muestra las calificaciones de la asignatura seleccionada
function pregunta4(){
    menu.innerHTML = `Calificaciones ${selected}`
    fetch(`calificaciones.php?materia=${selected}`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

// Función para subir la calificación de un estudiante
function subirCalificacion(element){
    let data = new FormData()
    console.log(element.id)
    data.append('id', element.id)
    data.append('calificacion', element.value)
    var ajax = new XMLHttpRequest()
    ajax.open("POST", `calificar.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){

        }
    }
    ajax.send(data);
}

// Función que muestra un formulario de informes
function pregunta5(){
    menu.innerHTML = `Informes`
    fetch(`form_informe.html`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
    registrar.addEventListener('click', (e) => {
        e.preventDefault()
    })
}

// Función para registrar los informes subidos por el usuario
function registrarInformes(){
    let form = document.getElementById('form_informe')
    let data = new FormData(form)
    fetch(`save_informes.php`, {method:'POST', body:data})
    .then(response => response.text())
    .then(data => {});
}
