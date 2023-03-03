 function aplus(element) {
    element.style.opacity = '0';
    element.addEventListener('transitionend', () => element.remove());

}