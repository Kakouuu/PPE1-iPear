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



function verif(){
    if(document.getElementById("numero").Value == 0){
        document.getElementById("numero").style.borderColor = "blue";
        document.getElementById("numero").style.borderWidth = "2px";
        event.preventDefault()
}else{
    document.getElementById("numero").style.borderColor = "green";
    document.getElementById("numero").style.borderWidth = "2px";
}

}