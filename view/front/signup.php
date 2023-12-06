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

header("Location: home.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Ajout</title>
</head>
<body>

    <h1>Ajout utilisateur</h1>
    <form action="" method="post">
        
        <div>
         <label for="nom">Nom : </label>
         <input type="text" name="n">
        </div>

        <br>

        <div>
         <label for="prenom">Prenom : </label>
         <input type="text" name="p">
        </div>

        <br>

        <div>
         <label for="email">Email : </label>
         <input type="text" name="e">
        </div>

        <br>

        <div>
         <label for="password">Password : </label>
         <input type="text" name="pw">
        </div>

        <br>

        <div>
         <label for="datedenaissance">Date de naissance : </label>
         <input type="text" name="dn">
        </div>

        <br>

        <div>
         <label for="role">Role (utilisateur/admin) : </label>
         <input type="text" name="r">
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>

    <br>

  

</body>
</html>