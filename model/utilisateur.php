<?php

class Utilisateur {
    private $id = null;
    private $nom = null;
    private $prenom = null;
    private $email = null;
    private $password = null;
    private $datedenaissance = null;
    private $role = null;

    public function __construct( $nom, $prenom, $email, $password, $datedenaissance, $role) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->datedenaissance = $datedenaissance;
        $this->role = $role;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDatedenaissance() {
        return $this->datedenaissance;
    }

    public function getRole() {
        return $this->role;
    }

    // Setter methods
    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

   public function setPassword($password) {
    $this->password = $password;
   }

   public function setDtaedenaissance($datedenaissance) {
    $this->datedenaissance = $datedenaissance;
   }

   public function setRole($role) {
    $this->role = $role;
   }

}
?>