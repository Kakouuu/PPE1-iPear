function aplus(element) {
    element.style.opacity = '0';
    element.addEventListener('transitionend', () => element.remove());
}

function checkOut(){
    document.getElementById("check").style.display = "block";
    document.getElementById('checkout').style.display = "block";
}

function fermer(){
    document.getElementById("check").style.display = "none";
    document.getElementById('checkout').style.display = "none";
}


// test.php page



function regex(){
    if(document.getElementById("numero").value == " "){
        document.getElementById("numero").style.borderColor = "red";
        document.getElementById("numero").style.borderWidth = "2px";
}
