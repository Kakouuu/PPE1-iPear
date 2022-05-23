
    function openOrClose(){
    let display = document.querySelector(".navbar_container2").style.display;
    if(display == "" || display == "none"){
    document.querySelector(".navbar_container2").style.display = "block"
}else{
    document.querySelector(".navbar_container2").style.display = "none"
}
    console.log(display)

}

