<?php
$verif="peut-etre";
if(isset($_GET['envoi'])){
    if($_GET['envoi']=="oui"){
        $verif="oui";
    }
    else{
        $verif="non";
    }
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire contactez-moi!</title>
	<meta name ="viewport" content="width=device-width,initial-scale=1" />
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleretouretformulaire.css">
</head>
<body>
	<div id="contener">
        <!--Main Navigation-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="../Index.html"><strong>PORTFOLIO</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../Index.html">ACCUEIL<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="moi.html">QUI SUIS-JE?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pro.html">PROJETS</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
        </nav>
      <!-- fin Main Navigation-->


      <form name="formulaire" action="../php/envoicontact.php" method="post" class="structure">
        
        <input type="hidden" name="variable1" value="variable récupérée en php par exemple" />
        <fieldset>
            <legend>Me contacter</legend>
        <div>
            <label for="name" >Nom : </label>
            <input type="text" id="name" name="name" placeholder="Nom" >
    
            <label for="firstname" class="nomprenom">Prénom : </label>
            <input type="text" id="firstname" name="firstname" placeholder="Prénom" >
        </div>
        <div>
            <label for="mail" >Email : </label>
            <input type="email" id="mail" name="mail" placeholder="Email" >
        </div>
        <div>
            <label for="portable" >Téléphone : </label>
            <input type="tel" name="portable" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="0000000000" class="Taille input1" >
        </div>
        <div>
            <label for="subject" >Sujet : </label>
            <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" >
        </div>
        <div>
            <label for="message" >Message : </label>
            <textarea  placeholder="Votre message" name="message"></textarea>
        </div>
    
        <div>
            <button type="submit" >Envoyer votre message </button>	
        </div>
        </fieldset>
        </form>
     
    
</div>
        <!-- [footer] -->
		<div id="social3">
            <a href="https://www.linkedin.com/in/laurene-courde-0b094989/"><img src="../img/icone/linkedin.png" alt="Linkedin" ></a>
            <a href="https://twitter.com/low080436"><img src="../img/icone/twitter.png" alt="Twitter" ></a>
            <a href="mentionlegale.html"><img src="../img/icone/mentionlegale.png" alt="mentionslegales" ></a>
        </div>

    <!-- Scripts -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/jquery.easing/jquery.easing.min.js"></script>
    

    

</body>
</html>
