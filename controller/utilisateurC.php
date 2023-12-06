<?php

include 'C:/xampp/htdocs/projetweb/model/utilisateur.php';
include 'C:/xampp/htdocs/projetweb/config.php';

class utilisateurC
{
    public function create($utilisateur1)
    {
        $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `password`, `datedenaissance`, `role`) VALUES (:nom, :prenom, :email, :password, :datedenaissance, :role)";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $utilisateur1->getNom(),
                'prenom' => $utilisateur1->getPrenom(),
                'email' => $utilisateur1->getEmail(),
                'password' => $utilisateur1->getPassword(),
                'datedenaissance' => $utilisateur1->getDatedenaissance(),
                'role' => $utilisateur1->getRole(),
            ]);
            header("location:dashboard.php");
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM `utilisateur` WHERE 1";
        $db = config::getConnexion();

        try {
            $utilisateurs = $db->query($sql);
            return $utilisateurs;
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `utilisateur` WHERE `id` = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        try {
            $req->execute(['id' => $id]);
            header("location:dashboard.php");
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function update($utilisateur2, $id2)
    {
        $sql = "UPDATE `utilisateur` SET `nom`=:nom, `prenom`=:prenom, `email`=:email, `password`=:password, `datedenaissance`=:datedenaissance, `role`=:role WHERE `id` = :id2 ";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $utilisateur2->getNom(),
                'prenom' => $utilisateur2->getPrenom(),
                'email' => $utilisateur2->getEmail(),
                'password' => $utilisateur2->getPassword(),
                'datedenaissance' => $utilisateur2->getDatedenaissance(),
                'role' => $utilisateur2->getRole(),
                'id2' => $id2,
            ]);
            header("location:dashboard.php"); 
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function findone($id5)
    {
        $sql = "SELECT * FROM `utilisateur` WHERE `id` = :id5";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute(['id5' => $id5]);
            $utilisateur3 = $query->fetch();
            return $utilisateur3;
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function sortnom()
 {
  $sql = "SELECT * FROM `utilisateur` ORDER BY `nom`";
  $db = config :: getConnexion(); 

  try {
      $utilisateurs = $db->query($sql);
      return $utilisateurs;
  } catch (Exeption $e) {
    echo 'Erreur :' . $e->getMessage();
  }
 }
 
}

?>
