<?php 
include 'C:/xampp/htdocs/projetweb/controller/utilisateurC.php';
$u = new utilisateurC();
if(
    isset($_POST["n"]) &&
    isset($_POST["p"]) &&
    isset($_POST["e"]) &&
    isset($_POST["pw"]) &&
    isset($_POST["dn"]) &&
    isset($_POST["r"])
    )
    
    {
$utilisateurxyz = new utilisateur(
    $_POST['n'],
    $_POST['p'],
    $_POST['e'],
    $_POST['pw'],
    $_POST['dn'],
    $_POST['r'],
);
$u->create($utilisateurxyz);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout.css">
    <title>Ajout</title>
</head>
<body>
    <h1>Ajout utilisateur</h1>
    <form action="" method="post" id="formr">
        
        <div>
         <label for="nom">Nom : </label>
         <input type="text" name="n" id="nom">
         <span id="nomr"></span>
        </div>

        <br>

        <div>
         <label for="prenom">Prenom : </label>
         <input type="text" name="p" id="prenom">
         <span id="prenomr"></span>
        </div>

        <br>

        <div>
         <label for="email">Email : </label>
         <input type="text" name="e" id="email">
         <span id="emailr"></span>
        </div>

        <br>

        <div>
         <label for="password">Password : </label>
         <input type="text" name="pw" id="password">
         <span id="passwordr"></span>
        </div>

        <br>

        <div>
         <label for="datedenaissance">Date de naissance : </label>
         <input type="date" name="dn" id="datedenaissance">
         <span id="datedenaissancer"></span>
        </div>

        <br>

        <div>
         <label for="role">Role (utilisateur/admin) : </label>
         <input type="text" name="r" id="role">
         <span id="roler"></span>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
    <script>
                           let myform = document.getElementById('formr');
                           myform.addEventListener('submit', function(e) {
                              let nameinput = document.getElementById('nom');
                              let prenom = document.getElementById('prenom');
                              let email = document.getElementById('email');

                              let pw = document.getElementById('password');
                              let role = document.getElementById('role');

                              const regex = /^[a-zA-Z-\s]+$/;
                              if (prenom.value === '') {
                                 let prenomr = document.getElementById('prenomr');
                                 prenomr.innerHTML = "le champs prenom est vide . ";
                                 prenomr.style.color = 'red';
                                 e.preventDefault();
                              }else if (!(regex.test(nameinput.value))) {
                                 let nameer = document.getElementById('nomr');
                                 nameer.innerHTML = "le prenom doit comporter des lettres,et tirets seulements.";
                                 nameer.style.color = 'red';
                                 e.preventDefault();
                              }
                              if (nameinput.value === '') {
                                 let nameer = document.getElementById('nomr');
                                 nameer.innerHTML = "le champs nom est vide . ";
                                 nameer.style.color = 'red';
                                 e.preventDefault();
                              } else if (!(regex.test(nameinput.value))) {
                                 let nameer = document.getElementById('nomr');
                                 nameer.innerHTML = "le nom doit comporter des lettres,et tirets seulements.";
                                 nameer.style.color = 'red';
                                 e.preventDefault();
                              }
                              if (email.value === '') {
                                 let emailr = document.getElementById('emailr');
                                 emailr.innerHTML = "le champs email est vide . ";
                                 emailr.style.color = 'red';
                                 e.preventDefault();
                              }

                              if (pw.value === '') {
                                 let pwr = document.getElementById('passwordr');
                                 pwr.innerHTML = "le champs password est vide . ";
                                 pwr.style.color = 'red';
                                 e.preventDefault();
                              }
                              if (role.value === '') {
                                 let roler = document.getElementById('roler');
                                 roler.innerHTML = "le champs role est vide . ";
                                 roler.style.color = 'red';
                                 e.preventDefault();
                              }
                              
                           });
                        </script>
    <br>

    <a href="dashboard.php">afficher</a>



</body>
</html>