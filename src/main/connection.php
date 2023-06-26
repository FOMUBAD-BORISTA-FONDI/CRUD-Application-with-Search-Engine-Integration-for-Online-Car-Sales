<?php
Session_start();
If(isset($_POST['submit']))
{
    $connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");
    
    // on recupere les donnees entrees 
    $nom = htmlspecialchars($_POST['nom']); 
    $password = htmlspecialchars($_POST['password']);
    
    If($nom!== "" && $password!== "")
    {
        $nbr = $connexion->prepare("SELECT COUNT(*) FROM Utilisateur WHERE nom = '$nom' and password = '$password'");
        $nbr->execute();

        $resultat = $nbr->fetch();

        $count = $resultat[0];
        If($count!=0) // nom d’utilisateur et mot de passe correctes
        {
           $_SESSION['nom'] = $nom;

            
            Header('Location: index_user.php?info=Connection reuissi');
        }
        Else
        {
           Header('Location: connection.php?information pas Juste'); // utilisateur ou mot de passe incorrect
        }
    }
}
  
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    form {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      font-family: Arial, sans-serif;
    }
    input[type="text"],input[type="email"], input[type="password"], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="index.css" />
    <script src="index.js" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>Voitures De Luxe</title>
  </head>
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <!-- <div class="logo">
          <img src="img/logo.png" alt="" />
        </div> -->
        <button
          class="mobile-close-btn"
          data-visible="false"
          aria-controls="primary-navigation"
        >
          <i class="uil uil-times-circle"></i>
        </button>
        <nav>
          <ul
            id="primary-navigation"
            data-visible="false"
            class="primary-navigation flex"
          >
            <li>
              <a class="active fs-100 fs-montserrat bold-500" href="index.php"
                >Accueill</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="inscription.php"
                >Inscription</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="connection.php" 
                > Connexion</a
              >
            </li>
          </ul>
        </nav>
      </div>

       
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>

    <!-- ===========Hero Section===================== -->
        <center>
         <form action="#" method="post">
              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom"><br>


              <label for="password">Mot de passe :</label>
              <input type="password" id="password" name="password"><br>


              <input type="submit" value="Soumettre" name="submit">
        
        </center>


      
  
    <footer>
      <!-- =============Brands================= -->

      <!-- =============Footer Menu=================== -->
      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
          © Juin-2023 Students_Ngoa. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy . Terms & Conditions
        </p>
      </section>
    </footer>
  </body>
</html>
