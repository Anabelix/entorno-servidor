let user1 = document.querySelectorAll(".user1");
let usuarios = document.querySelectorAll(".foto");
let clase = [];

usuarios.forEach(usuario => {
    clase.push("."+usuario.className.split(' ')[1]);
});

for (let index = 0; index < clase.length; index++) {
    usuarios[index].style.backgroundImage="url('./img/icon"+clase[index].charAt(clase[index].length-1)+".jpg')";
    usuarios[index].style.backgroundSize="cover";
} 
function openForm() {
    document.querySelector("#formulario").style.display="block";
}
function closeForm() {
    document.querySelector("#formulario").style.display="none";
}