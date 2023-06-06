function aplus(element) {
    element.style.opacity = '0';
    element.addEventListener('transitionend', () => element.remove());
}

function checkOut(){
    document.getElementById("check").style.display = "block";
    alert("salut");
}

function checkOff(){
    document.getElementById("check").style.display = "block";
    alert("salut");
}