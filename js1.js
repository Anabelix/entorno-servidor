const contenido = document.getElementById("contenido");
let nombre="Anabel";

contenido.innerHTML=`<p>${nombre}</p>`;
for (let i=0; i<=10; i++) {
    if (i%2==0) {
        contenido.innerHTML+=`${i} `;
    }
}

contenido.innerHTML=`<p>${nombre.substring(2, 3)}<p>`;

let info = ["Ana", "Isabel", "Pedrajas", "Navarro"];

info.forEach(element=>{
    contenido.innerHTML+=`${element} `;
});