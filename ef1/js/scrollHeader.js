const head = document.getElementById('Header');

window.onscroll = function() {
    if (window.scrollY >= 20) {
        head.classList.add('backgroundScroll');
    } else {
        head.classList.remove('backgroundScroll');
    }
}