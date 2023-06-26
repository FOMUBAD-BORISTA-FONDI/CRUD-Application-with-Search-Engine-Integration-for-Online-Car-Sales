<?php     
            $connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", ""); 
            

            $marque = htmlspecialchars($_POST['marque']);
            $modele = htmlspecialchars($_POST['modele']);
            $description = htmlspecialchars($_POST['description']);
            $prix = htmlspecialchars($_POST['prix']);

            Session_start(); $ses = $_SESSION['nom']  ;

            //class qui recupere les * des utilisateurs avec le nom $ses
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

            $ajout = $connexion->prepare("INSERT INTO  Annonce (marque, modele, description, date_annonce ,  prix,  name, type, bin ) VALUES('$marque', '$modele', '$description','$date', '$prix',?,  ?, ?)");
            

            $ajout->execute(array($_FILES["image"]["name"], $_FILES["image"]["type"],  file_get_contents($_FILES["image"]["tmp_name"]), ));
            

            header('location: AddCars.php?info=Info Mis a jour');      
          