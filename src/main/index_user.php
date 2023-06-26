<?php 
 Session_start();
$nom = $_SESSION['nom']  ;


$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "Sale_Cars_DB";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // On définit le mode d'erreur de PDO sur Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $e->getMessage();
}

$allcars = $db->query('SELECT * FROM Voiture ORDER BY id_voiture DESC ');

if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $allcars = $db->query('SELECT id_voiture, marque, modele , prix , name, Voiture.description
    FROM Voiture 
    WHERE Voiture.marque LIKE "%'.$recherche.'%" OR Voiture.modele LIKE "%'.$recherche.'%";
    ');

}

include_once('import.php');
$publicite = new Pub;
$pub = $publicite->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
   <style type="text/css">
  .col-9{   
  display:flex;
  align-items: center;
  justify-content: center;
  
}
   </style> 
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
              <a class="active fs-100 fs-montserrat bold-500" href="index_user.php"
                >Home </a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="shoop.php"
                >Annonces</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="AddCar.php"
                > Ajouts </a
              >
            </li>
            <li>
            </li>
            <li>
            </li>
            <li>
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="index.php"
                > Deconnection </a
              >
            </li>
          </ul>
        </nav>
      </div>

       
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>
    <div class="col-9">
        <div class="search">
          <form method = "GET" , >
             <input type="search" name = "s" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-lg" placeholder="Marque ou Modele  " id="searchinput">
              <input type="submit" name = "envoyer">
          </form>
        </div>
    </div><br>

    <!-- ===========Hero Section===================== -->

    <main class="hero-section">
      <div>
        <h1 class="fs-200 fs-poppins">
          <span class="block lineheight fs-300 bold-900 big-wireless fs-poppins"
            ><?php echo $nom ; ?></span
          ><span
            class="text-white fs-900 uppercase lineheight-2 bold-bolder fs-poppins"
            >!!!!</span
          >
        </h1>
        <img src="img/image10.png" alt="" />
      </div>
      <div class="hero-inner flex">
        <div>
        </div>
        <div class="hero-info">
          <h4 class="fs-montserrat">Description</h4>
          <p class="fs-montserrat">
            Bienvenu <?php echo $nom ; ?> dans notre site en tant que administrateur de  vente et annonce.
          </p>
        </div>
      </div>
    </main>

    <!-- =================Product Section======================= -->

   <!-- =================Product Section======================= -->
        
  <section class="product-section">
    <?php if($allcars->rowCount()>0){ 
            while($cars = $allcars->fetch()){
      ?>
     <div class="category bg-black grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            <?php echo $cars['prix'] ;?> <span class="block fs-300 fs-poppins bold"><?php echo $cars['modele'] ;?></span
            ><span
              class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
              ><?php echo $cars['marque'] ;?></span
            >
          </h3>
          <button class="prdduct-btn large-btn text-yellow bg-white fs-montserrat" 
           onclick="window.location.href='description.php?id=<?php echo $cars['id_voiture'] ;?>';">
         Description
       </button>

          
        </div>
        <div class="product-img2">
          <img src="img/<?php echo $cars['name']; ?>" width="500" height="250"> 

        </div>
      </div>
      <?php  } } else {?>
        <p>Dosole ,aucune voiture de cette marque n'a ete publiee</p>
      <?php }?>         
    </section>
    <footer>
      <!-- =============Brands================= -->

      <!-- =============Footer Menu=================== -->
      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
          © 2023 carStore. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy . Terms & Conditions
        </p>
      </section>
    </footer>
  </body>
</html>
