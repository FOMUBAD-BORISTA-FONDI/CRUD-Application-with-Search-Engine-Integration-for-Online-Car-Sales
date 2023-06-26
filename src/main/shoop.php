<?php 
 Session_start();
$nom = $_SESSION['nom']  ;
include_once('import_annonce.php');
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
     <link rel="stylesheet" href="shop.css" />
    <script src="index.js" defer></script>
    <script src="shop.js" defer></script>
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
              <a class="active fs-100 fs-montserrat bold-500" href="index_user.php"
                >Home </a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="#.php"
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
              <a class="fs-100 fs-montserrat bold-500" href="index_user.php"
                > Deconnection </a
              >
            </li>
          </ul>
        </nav>
      </div>

       
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>

   <!-- ===================Shop Feature Section============================ -->

      <section class="shop-feature bg-gray grid">
        <div>
          <p class="fs-montserrat text-black">
            Home <span aria-hidden="true" class="margin">></span> Product
          </p>
        </div>
        <h2 class="fs-poppins fs-300 bold-700">Product</h2>
      </section>

      <!-- ===================Section 2---------------------- -->

    <!-- =================Product Section======================= -->
    <section class="product-section">
        <?php foreach ($pub as $pb) { ?>
          <div class="category bg-black grid">
            <div>
              <h3 class="text-white fs-50 fs-montserrat bold">
                <?php echo $pb['prix']; ?> <span class="block fs-300 fs-poppins bold"><?php echo $pb['session']; ?></span><span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"><?php echo $pb['marque']; ?></span>
              </h3>
              <button class="prdduct-btn large-btn text-white bg-red fs-montserratt" onclick="window.location.href='description1.php?id=<?php echo $pb['id_annonce']; ?>';">
                Description
              </button>
            </div>
            <div class="product-img2">
              <img src="img/<?php echo $pb['name']; ?>" width="500" height="250">
            </div>
          </div>
        <?php } ?>
   </body>
</html>
