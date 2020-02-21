function modificarMarginTop(){
    var altura = 0;
    altura = document.getElementById('Header').clientHeight;
    document.getElementById('mainP').style.marginTop = altura + 'px';
    console.log(altura + 'px');
    document.getElementById('Header').classList.add('backgroundScroll');
}

modificarMarginTop();