<?php

include 'C:/xampp/htdocs/projetweb/controller/utilisateurC.php';
$u = new utilisateurC();
$tableutilisateurs= $u->read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
    <link href="read.css" rel="stylesheet">
</head>
<body>
    <h1>liste des utilisateurs</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">date de naissance</th>
            <th scope="col">role</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($tableutilisateurs as $elementutilisateur) {
            ?>
          <tr>
            <th scope="row"><?=$elementutilisateur['id']?></th>
            <td><?php echo $elementutilisateur['nom'] ;;?></td>
            <td><?=$elementutilisateur['prenom']?></td>
            <td><?=$elementutilisateur['email']?></td>
            <td><?=$elementutilisateur['password']?></td>
            <td><?=$elementutilisateur['datedenaissance']?></td>
            <td><?=$elementutilisateur['role']?></td>
            <td> <a href="delete.php?del=<?=$elementutilisateur['id']?>">delete</a> / <a href="update.php?id4=<?=$elementutilisateur['id']?>">update</a> </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <a href="ajout.php" class="btn btn-primary">ajout</a>
</body>
</html>