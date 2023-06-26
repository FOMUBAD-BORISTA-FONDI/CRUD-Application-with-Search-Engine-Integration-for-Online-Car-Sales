<?php 
$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");
    
class Pub{
        public function fetch_all(){
            global $connexion;

            $squery = $connexion-> prepare("SELECT * FROM Annonces");
            $squery->execute();

            return $squery->fetchAll();
        }
    }
?>
