document.getElementById('headerMobile').classList.add('bgMobile');

const navegadorMovil = document.getElementById('navegadorMovil');
var condicion = 0;

function abrirNav() {
    if (condicion == 0) {
        navegadorMovil.classList.add('mostrarNavegador');
        condicion = 1;
    } else {
        navegadorMovil.classList.remove('mostrarNavegador');
        condicion = 0;
    }
    console.log('condicion de apertura: ' + condicion);
}

function cerrarNav() {
    if (condicion == 1) {
        navegadorMovil.classList.remove('mostrarNavegador');
        condicion = 0;
    }
    console.log('condicion de apertura: ' + condicion);
}