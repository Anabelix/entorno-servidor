//Creacion de arrays
var persona1 = ['Anabel', 22, true];

var persona2 = new Array(3); //Aqui le estoy limitando el tamaño pero se puede modificar

var persona3 = new Array('rojo', 'azul', 'verde');

//Ejemplo
var colores = ['verde', 'azul', 'rojo'];
console.log(colores);
console.log(colores[0]);
console.log(colores[1]);
console.log(colores[2]);
console.log(colores[3]);
console.log(colores.length);
colores.push(2);
console.log(colores.length);
console.log(colores);

//Ejercicio 1
for (var i=0; i < colores.length; i+=1) {
    console.log(`En la posicion ${i} esta el valor: ${colores[i]}`);
}

//Ejercicio 2
var numeros = [0,1,2,3,4,5,6,7,8,9,10,11,12];
//Bucle for of es como un for each
for (const indice of numeros) { //const indice: variable i
    if (indice%2 == 0) {
        console.log(indice);
    }
}

/* for (var i=0; i<numeros.length; i+=1) {
    if (numeros[i]%2 == 0) {
        console.log(numeros[i]);
    }
} */

//Ejercicio 3
var total = 0;
for (const contenido of numeros) {
    total += contenido;
}

console.log('El total es: '+total);
