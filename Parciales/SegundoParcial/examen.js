function crear(){
    var submenu= document.getElementById('submenu');
    var ajax = new XMLHttpRequest(); //crear el objeto ajax
    ajax.open("GET", `datos.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById('titulo').innerHTML = ajax.responseText;
            pregunta1();
        }
    };
    ajax.send();
    //un objeto es una direccion de memoria todo esto se guarda, que es innerhtml es la propiedad del objeto DOM, 
}

function pregunta1(){
    var titulo = document.getElementById('titulo').innerHTML = 'pregunta 1';
    cargarcontenidoSubmenu('datos.html');
}

function crear(){

    filas = document.getElementById('filas').value;
    columnas = document.getElementById('columnas').value;

    table = `<table style="border:1px solid black; border-collapse:collapse;">`
    for (i=0; i<filas ;i++){
        table+=`<tr >`;
        for(j=0;j<columnas;j++){
            table+=`<td onclick="cambiarinput($(i),$(j))" style="border:1px solid black; border-collapse:collapse; width:20px;" id="c$(i)$(j)">&nmspl</tb>`;
        }
        table+=`</tr>`;
    }
    table += `</table>`;

    document.getElementById('contenido').innerHTML = table; 
    //cuantas maneras hay para crear elementos DOM podemos ir creando dos con el html o directamente, 
}

function cambiarinput(x,y){
    celda=document.getElementById('c'+x+y).innerHTML = `<input type="text" name="celda"  id="celda" onchange="escribir()"`;

    celda=document.getElementById('c+x+y').onclick = null
    // celda.onclick
}

function escribir(){
    valor=document.getElementById('celda').value;
    document.getElementById
    document.getElementById('celda').outerHTML = valor;
}


function pregunta2 (){
    document.getElementById('titulo').innerHTML = "pregunta 2"

    var submenu = document.getElementById('sub-menu').innerHTML="";
    var contenido = document.getElementById('contenido').innerHTML="";
    texto.innerHTML = contenido;
    var texto = document.createElement('p');
    pregunta1.innerHTML = "texto"
    input.id="text"
    input.type="text"
    input.style="width:50px;"

    document.getElementById('sub-menu').submenu.appendChild(texto)

    var boton=document.createElement('boton');
    boton.id="buton";
    boton.onclick=("crearParrafo()")
    document.getElementById('sub-menu').appendChild(input);
}

function crearParrafo(){
    var contenido = document.getElementById('contenido').innerHTML;
    var parrafo = document.createElement('p');
    parrafo.innerHTML = document.getElementById('texto').value;

    parrafo.style.backgroundColor= document.getElementById('fondo').value
    parrafo.style.color= document.getElementById('frente').value
    
    contenido.appendChild(parrafo);                                                          


}