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
    if(document.getElementById("numero").value === ""){
        document.getElementById("numero").style.borderColor = "blue";
        document.getElementById("numero").style.borderWidth = "2px";
        event.preventDefault()
}else{
    document.getElementById("numero").style.borderColor = "green";
        document.getElementById("numero").style.borderWidth = "2px";
}
if(document.getElementById("nom").value === ""){
    document.getElementById("nom").style.borderColor = "blue";
    document.getElementById("nom").style.borderWidth = "2px";
    event.preventDefault()

}
if(document.getElementById("date").value === ""){
    document.getElementById("date").style.borderColor = "blue";
    document.getElementById("date").style.borderWidth = "2px";
    event.preventDefault()
}
if(document.getElementById("cvc").value === ""){
    document.getElementById("cvc").style.borderColor = "blue";
    document.getElementById("cvc").style.borderWidth = "2px";
    event.preventDefault()
}

}