    function number(id){

    var calcul = document.getElementsByName('qteprod')[id].value;
    var prix = document.getElementsByClassName("PU")[id].id;
    var result = (calcul * prix).toFixed(2);
    document.getElementsByClassName("toto")[id].value = result + " €";

    totalPrice();

}


    function totalPrice() {
        var articles = document.getElementsByName('tata')
        var rendu = 0
        var i = 0
        while (i < articles.length) {
            rendu += parseFloat(articles[i].value)

            i++;
            document.getElementById('totale').innerHTML = rendu.toFixed(2) + " €"

            document.getElementById('tooto').innerHTML = "salut"

        
        }
    }

