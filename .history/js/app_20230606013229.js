function aplus(element) {
    element.style.opacity = '0';
    element.addEventListener('transitionend', () => element.remove());
}

function checkOut(){
    document.getElementById("check").style.display = "block";
    
}

function fermer(){
    document.getElementById("check").style.display = "none";
    
}

function ouvrir(){
    document.getElementById('checkout').style.display = block;
}