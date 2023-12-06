<?php
include 'C:/xampp/htdocs/projetweb/controller/utilisateurC.php';
$u = new utilisateurC();
    $id1 = $_GET['del'];
$u->delete($id1);
?>