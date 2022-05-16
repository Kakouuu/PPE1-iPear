<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="newuser.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="register">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form" action="traitementnewuser.php" method="post" onsubmit="validé(event)">
        <h2 class="fa-solid fa-seedling"> Creer un compte</h2>
        <div class="info">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" require>
            <br>
            <br>
            <input type="text" id="nomdefamille" name="nom" placeholder="Nom" require>
            <br>
            <br>
            <input type="text" id="email" placeholder="E-mail" class="verif" require>
            <br>
            <br>
            <input type="text" id="number" name="tel" placeholder="Numéro de téléphone" require>
            <br>
            <br>
            <input type="text" id="adresse" name="poste" placeholder="Adresse de livraison" require>
            <br>
            <br>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" require>
            <br>
            <br>
            <input type="submit"  onclick="valid()"  value="S'inscrire">
        </div>
    </form>



    <script>
const requirelist = 
        console.log(document.getElementById('number').value);
        let erreur = 0;

        function valid() {
            var a = document.getElementById('email').value;
            var prenom = document.getElementById('prenom').value;
            var nom = document.getElementById('nomdefamille').value;
            var numero = document.getElementById('number').value;
            var addre = document.getElementById('adresse').value;
            var mdp = document.getElementById('mdp').value;
            
            // console.log(a.search(/[0-9]/));
            
            if (a.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/) == 0) {
    
                document.getElementById('email').style.border = '1px green solid';
            }
  
            
            
            else{
        
                document.getElementById('email').style.border = '1px red solid';
                event.preventDefault()
            }
            return erreur;
        }





        

    </script>


</div>


</body>
</html>