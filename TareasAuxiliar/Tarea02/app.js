val1 = 0;
val2 = 0;
section1 = document.getElementById("section1");
section2 = document.getElementById("section2");
function escribir(element) {
  num = element.innerHTML;
  section2.innerHTML += num;
}

buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function plus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}+`;
  section2.innerHTML = "";
}

plusButton = document.getElementById("plus");
plusButton.addEventListener("click", () => {
  plus();
});

function minus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}-`;
  section2.innerHTML = "";
}

minusButton = document.getElementById("minus");
minusButton.addEventListener("click", () => {
  minus();
});

function multiplication() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}*`;
  section2.innerHTML = "";
}

multiplicationButton = document.getElementById("multiplication");
multiplicationButton.addEventListener("click", () => {
  multiplication();
});

function division() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}/`;
  section2.innerHTML = "";
}

divisionButton = document.getElementById("division");
divisionButton.addEventListener("click", () => {
  division();
});

function potencia() {
    val1 = parseFloat(section2.innerHTML);
    section1.innerHTML = `${val1}^`;
    section2.innerHTML = "";
  }
  
  potenciaButton = document.getElementById("potencia");
  potenciaButton.addEventListener("click", () => {
    potencia();
  });

  function raiz() {
    val1 = parseFloat(section2.innerHTML);
    section1.innerHTML = `√${val1}`;
    section2.innerHTML = "";
  }
  
  raizButton = document.getElementById("raiz");
  raizButton.addEventListener("click", () => {
    raiz();
  });

  function factorial() {
    val1 = parseFloat(section2.innerHTML);
    section1.innerHTML = `${val1}!`;
    section2.innerHTML = "";
  }  
  facButton = document.getElementById("fac");
  facButton.addEventListener("click", () => {
    factorial();
  });
  function log10() {
    val1 = parseFloat(section2.innerHTML);
    section1.innerHTML = `${val1}!`;
    section2.innerHTML = "";
  }  
  logd10 = document.getElementById("log10");
  logd10.addEventListener("click", () => {
    log10();
  });
function equal() {
  op = section1.innerHTML[section1.innerHTML.length - 1];
  if (section2.innerHTML.length > 0) val2 = parseInt(section2.innerHTML);
  else val2 = 0;
  switch (op) {
    case "+":
      res = val1 + val2;
      section1.innerHTML = `${val1}+${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "-":
      res = val1 - val2;
      section1.innerHTML = `${val1}-${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "*":
      res = val1 * val2;
      section1.innerHTML = `${val1}*${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "/":
      res = val1 / val2;
      section1.innerHTML = `${val1}/${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "potencia":
      res = val1 ** val2;
      section1.innerHTML = `${val1} ^ ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "raiz":
      res =   Math.sqrt(val1);
      section1.innerHTML = `√${val1}`;
      section2.innerHTML = `${res}`;
      break;
    case "fac":
      res = factorials(val1);
      function factorials(n) {
        return n === 0 ? 1 : n * factorials(n - 1);
      }
      section1.innerHTML = `${val1}!`;
      section2.innerHTML = `${res}`;
      break;
    case "log10":
      res = Math.log10(val1);
      section1.innerHTML = `log10(${val1})`;
      section2.innerHTML = `${res}`;
      break;
    default:
      break;
  }
}

equalButton = document.getElementById("equal");
equalButton.addEventListener("click", () => {
  equal();
});

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

delButton = document.getElementById("delete");
delButton.addEventListener("click", () => {
  del();
});

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
}

cleanButton = document.getElementById("clean");
cleanButton.addEventListener("click", () => {
  clean();
});

/*Agregar una fila de botones con las funciones de potencia, raiz, factorial, logaritmo base 10*/