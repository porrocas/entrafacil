const navFix = document.getElementById('navegadorFixed');

function margenPresent(){
    var alturaNav = navFix.clientHeight;
    const present = document.getElementById('present');
    present.style.marginTop = alturaNav + 'px';
}

margenPresent();