var persona = {
    nombre: 'Anabel',
    edad: 22,
    saludar: function() {
        console.log('Hola '+this.nombre);
    }
};

console.log(persona);
console.log(persona.nombre);
console.log(persona.saludar()); //Sale el undefined porque no devuelve nada nuestra funcion
persona.saludar(); 

//Ejercicios
var jugador = {
    fuerza: 1,
    incrementarFuerza: function(){
       this.fuerza += 1;
       console.log('Tu fuerza se ha incrementado')
    },
    consultarFuerza: function() {
        console.log('Tu fuerza es de: '+this.fuerza);
    }
}

console.log(jugador);
console.log(jugador.fuerza);
jugador.consultarFuerza();
jugador.incrementarFuerza();
jugador.consultarFuerza();

var objeto = {
    color: 'red',
}
console.log(objeto.size);