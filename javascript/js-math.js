var pi = Math.PI;
console.log(pi);

function calcularAleatorio (numero) {
    return Math.round(Math.random() * numero);
}

console.log(calcularAleatorio(10));