<?php
$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");
    session_start();
    $ses = $_SESSION['nom'];

class Pub{
        public function fetch_all(){
            global $connexion, $ses;

            $squery = $connexion-> prepare("SELECT * FROM Utilisateur WHERE nom = '$ses'");
            $squery->execute();

            return $squery->fetchAll();
        }
    }

 function Id_user_online()
 {
    $publicite = new Pub;
    $pub = $publicite->fetch_all();
    foreach ($pub as $pb) { 

            $id_user = $pb['id_user']; 
           } 
        return $id_user; 
}

$id_user = Id_user_online();
$marque = htmlspecialchars($_POST['marque']);
$modele = htmlspecialchars($_POST['modele']);
$description = htmlspecialchars($_POST['description']);
$date = htmlspecialchars($_POST['date']);
$prix = htmlspecialchars($_POST['prix']);

$ajout = $connexion->prepare("INSERT INTO  Annonces (marque, model,     prix, description, date_annonce,  name,  bin, id_user_connect , session) VALUES('$marque', '$modele', '$prix', '$description','$date',?,  ?, '$id_user', '$ses')");
    

    $ajout->execute(array($_FILES["image"]["name"],   file_get_contents($_FILES["image"]["tmp_name"]) ));

    header('location: AddCar.php?info=Info Mis a jour');      
          
?>