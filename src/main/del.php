<?php 
$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");
 Session_start();
$nom = $_SESSION['nom']  ;
$id = $_GET['id'];


$supp = $connexion->prepare("DELETE FROM Annonces WHERE id_annonce = '$id' AND session = '$nom' ");
                $supp->execute();
header('location: shoop.php?info=Info Mis a jour');    
?>