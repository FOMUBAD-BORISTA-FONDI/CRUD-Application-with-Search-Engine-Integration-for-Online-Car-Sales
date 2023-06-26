<?php
	If(isset($_POST['submit'])) {

			
			$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");

			//on recupere les donnees entrees par utilisateur

			$nom = htmlspecialchars($_POST['nom']);
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$password_verifier = htmlspecialchars($_POST['password_verifier']);


			if ($password == $password_verifier) {
				$insertion = "INSERT INTO Utilisateur( nom, email, password) VALUES('$nom', '$email', '$password')";
				$connexion->exec($insertion);

				//redirige vers la page principale
				header('location:connexion.php?info=Compte cree');
			}else{
				echo "Mot de passe pas verifier";
				header('location:inscription.php?info=password pas verifie');
			}		
	}
	
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>test</title>
</head>

<body>

<form action="#" method="post">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom"><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email"><br>

  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password"><br>

  <label for="password_verifier">Mot de passe Verifier:</label>
  <input type="password" id="password_verifier" name="password_verifier"><br>

  <input type="submit" value="Soumettre" name="submit">
</form>

</body>
</html>
