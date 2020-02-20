const preImagen = document.getElementById('preImgEvent');
const mostrarImg = document.getElementById('imgAmostrar');

var imgClick = new Array();
document.onclick = abrirPreEvent;

function abrirPreEvent(e){
    var clickHecho,
        claseClick,
        rutaImg;

	if (!(e == null)) {
		clickHecho = event.srcElement.id;
		claseClick = event.srcElement.tagName;
        rutaImg = event.srcElement.src;
        if(clickHecho == 'imgOfEvento' && claseClick == "IMG" && rutaImg != undefined){
            preImagen.style.display = 'flex';
            mostrarImg.src = rutaImg;
        }
    }
    return console.log(rutaImg);
}

function cerrarPreEvent(){
    preImagen.style.display = 'none';
}

const video = document.getElementById('videoMain');

if(screen.width <= 576){
    video.src = '../services/video/bg2.mp4';
}