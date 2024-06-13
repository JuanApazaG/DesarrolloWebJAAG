let val1 = 0;
let val2 = 0;
let op = "";
const section1 = document.getElementById("section1");
const section2 = document.getElementById("section2");

function escribir(element) {
  const num = element.innerHTML;
  section2.innerHTML += num;
}

const buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function setOperation(operator) {
  val1 = parseFloat(section2.innerHTML);
  op = operator;
  section1.innerHTML = `${val1} ${operator}`;
  section2.innerHTML = "";
}

document.getElementById("plus").addEventListener("click", () => setOperation("+"));
document.getElementById("minus").addEventListener("click", () => setOperation("-"));
document.getElementById("multiplication").addEventListener("click", () => setOperation("*"));
document.getElementById("division").addEventListener("click", () => setOperation("/"));
document.getElementById("potencia").addEventListener("click", () => setOperation("^"));
document.getElementById("raiz").addEventListener("click", () => setOperation("√"));
document.getElementById("fac").addEventListener("click", () => setOperation("!"));
document.getElementById("log10").addEventListener("click", () => setOperation("log10"));

function equal() {
  if (section2.innerHTML.length > 0) val2 = parseFloat(section2.innerHTML);
  else val2 = 0;
  let res;
  switch (op) {
    case "+":
      res = val1 + val2;
      section1.innerHTML = `${val1} + ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "-":
      res = val1 - val2;
      section1.innerHTML = `${val1} - ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "*":
      res = val1 * val2;
      section1.innerHTML = `${val1} * ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "/":
      res = val1 / val2;
      section1.innerHTML = `${val1} / ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "^":
      res = Math.pow(val1, val2);
      section1.innerHTML = `${val1} ^ ${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "√":
      res = Math.sqrt(val1);
      section1.innerHTML = `√${val1}`;
      section2.innerHTML = `${res}`;
      break;
    case "!":
      res = factorial(val1);
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

function factorial(n) {
  return n === 0 ? 1 : n * factorial(n - 1);
}

document.getElementById("equal").addEventListener("click", () => equal());

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

document.getElementById("delete").addEventListener("click", () => del());

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
  val1 = 0;
  val2 = 0;
  op = "";
}

document.getElementById("clean").addEventListener("click", () => clean());
