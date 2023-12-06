<?php
include('../../config.php');
session_start();
error_reporting(0);
if($_SESSION['role']=="admin")
{
    header("Location: http://localhost/projetweb/view/back/examples/dashboard.php");
    exit();
}
if(isset($_GET['logout']))
{
    session_destroy();
    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <center><h1>Culture Connectée</h1></center> 
  
</head>
<body>

    <div class="background"></div>
    <div class="logo">
    <img  src="C:\Users\user\Desktop\site\image\logo.jpg" alt="Texte de remplacement de l'image" width="60" height="60">
</div>
<ul>
    <?php
    if(!$_SESSION['id']){
    echo('<li><a href="login.php" class="active">Se connecter</a></li>');
    }else {
    echo('<li><a href="?logout" class="active">Se deconnecter</a></li>');
  }
    ?>
    <li><a href="home.html" class="active">Accueil</a></li>
    <li><a href="activités.html">Activités</a></li>
    <li><a href="exposition.html">Exposition</a></li>
    <li><a href="commande.html">Commande</a></li>
    <li><a href="tickets.html">Billets</a></li>
    <li><a href="commentaire.html">Commentaires</a></li>

</ul>

    
    <div style="display: flex; align-items: center;">
        <video autoplay loop muted playsinline class="video" width="2000" height="500" controls style="object-fit: cover;">
            <source src="C:\Users\user\Desktop\site\video\video.mp4" type="video/mp4">
        </video>
    </div>    </div>
    <br><br><br>  <br>
    <center><div class="image"></div>
    <img class="image"src="C:\Users\user\Desktop\site\image\francesco-mazzola-dit-il-parmigianino-portrait-de-jeune-femme-dit-aussi-antea.jpg" alt="Texte de remplacement de l'image" width="400" height="500">
    <div class="image">
        <img class="image"src="C:\Users\user\Desktop\site\image\leonard-de-vinci-portrait-de-monna-lisa-dite-la-joconde.jpg" width="400" height="500">
    </div>
    <div class="image">
      
    
        <img class="image"src="C:\Users\user\Desktop\site\image\leonard-de-vinci-la-vierge-a-l-enfant-avec-sainte-anne-musee-du-louvre.jpg" width="400" height="500">
    </div></center>  <br><br><br><br>  <br><br><br><br>  <br><br>
 

    <h3>bienvenue à Culture Connectée </h3>
  <br>
<h2>Il y a toujours une bonne raison de visiter Culture Connectée. Les œuvres vous étonnent, vous invitent à rêver, à imaginer. Il est temps de préparer votre visite. Besoin d’inspiration ? Parcours et visites guidées vous font découvrir les lieux emblématiques.</h2>
<center> <img class="image"src="C:\Users\user\Desktop\site\image\visiteurs-dans-la-salle-daru.jpg" width="1000" height="700"></center>
<br><br><br><br>
    </div>
    <h3>
    La visite d'un musée est une plongée captivante dans l'histoire, l'art et la culture. Chaque œuvre révèle un trésor, un fragment de notre passé, une histoire à partager. C'est une connexion précieuse avec notre patrimoine, une source d'inspiration et de réflexion. Explorez un musée, élargissez vos horizons, et laissez votre âme s'enrichir.</h3>
<div class="navbarb"></div>

<div class="text-container"> 
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h4>A visit to a museum is a search for beauty and meaning in our lives. Go to museum as often as you can.</h4>
<p>-Maria Kalman-</p></div>
 
</div>
<div class="background">



</div>

</body>
</html>
