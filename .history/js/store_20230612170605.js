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
            document.getElementById('totale').innerHTML = rendu.toFixed(2) + " €";
            document.getElementById('toto').innerHTML = rendu.toFixed(2) + " €";
            alert(rendu);

        

        
        }
    } 

    $(document).ready(function(){

        $('.radio-group .radio').click(function(){
            $('.radio').addClass('gray');
            $(this).removeClass('gray');
        });
        
        $('.plus-minus .plus').click(function(){
            var count = $(this).parent().prev().text();
            $(this).parent().prev().html(Number(count) + 1);
        });
        
        $('.plus-minus .minus').click(function(){
            var count = $(this).parent().prev().text();
            $(this).parent().prev().html(Number(count) - 1);
        });
        
        });
