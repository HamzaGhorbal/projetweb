<?php
include 'C:/xampp/htdocs/projetweb/controller/utilisateurC.php';

$u = new utilisateurC();

// Check if 'id' is set in the query string
if(isset($_GET['id4'])) {
    $id4 = $_GET['id4'];
    $utilisateur5 = $u->findone($id4);

    if (
        isset($_POST["n"]) &&
        isset($_POST["p"]) &&
        isset($_POST["e"]) &&
        isset($_POST["pw"]) &&
        isset($_POST["dn"]) &&
        isset($_POST["r"])
    ) {
        // Using the correct class name, assuming it's 'utilisateur' instead of 'produit'
        $utilisateurxyz = new utilisateur(
            $_POST['n'],
            $_POST['p'],
            $_POST['e'],
            $_POST['pw'],
            $_POST['dn'],
            $_POST['r']
        );

        // Correct the parameter passed to the 'update' method, use '$id' instead of '$id3'
        $u->update($utilisateurxyz, $id4);
    }
} else {
    // Handle the case where 'id' is not set in the query string
    echo "Invalid or missing user ID.";
    // You might want to redirect the user or take other appropriate action.
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <h1>Modifier utilisateur</h1>
    <form action="" method="post">

        <br>

        <div>
            <label for="nom">Nom : </label>
            <input type="text" value="<?=htmlspecialchars($utilisateur5['nom'])?>" name="n">
        </div>

        <br>

        <div>
    <label for="Prenom">Prenom : </label>
    <input type="text" value="<?=htmlspecialchars($utilisateur5['prenom'])?>" name="p">
</div>


        <br>
        
        <div>
            <label for="email">Email : </label>
            <input type="text" value="<?=htmlspecialchars($utilisateur5['email'])?>" name="e">
        </div>

        <br>

        <div>
            <label for="password">Password : </label>
            <input type="text" value="<?=htmlspecialchars($utilisateur5['password'])?>" name="pw">
        </div>

        <br>
        
        <div>
            <label for="datedenaissance">Date de naissance : </label>
            <input type="text" value="<?=htmlspecialchars($utilisateur5['datedenaissance'])?>" name="dn">
        </div>

        <br>
        
        <div>
            <label for="role">Role (utilisateur/admin) : </label>
            <input type="text" value="<?=htmlspecialchars($utilisateur5['role'])?>" name="r">
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>
    
    <br>

    <a href="read.php">Afficher</a>

</body>
</html>
