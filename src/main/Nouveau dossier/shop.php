<?php
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Icon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- icon -->

  <!-- Google fonts End -->

  <!-- custon style Sheet & JavaScript -->
  <link rel="stylesheet" href="shop.css" />
  <link rel="stylesheet" href="index.css" />
  <script src="index.js" defer></script>
  <script src="shop.js" defer></script>
  <!-- custon style Sheet & JavaScript -->
  <title>Car Sales Website</title>
</head>

<body class="home">
  <header class="primary-header container flex">
    <div class="header-inner-one flex">
      <div class="logo">
        <img src="/img/logo.png" alt="" />
      </div>
      <button class="mobile-close-btn" data-visible="false" aria-controls="primary-navigation">
        <i class="uil uil-times-circle"></i>
      </button>
      <nav>
        <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">
          <li>
            <a class="fs-100 fs-montserrat bold-500" href="index_user.php">Home</a>
          </li>
          <li>
            <a class="active fs-100 fs-montserrat bold-500" href="shop.php">Voitures</a>
          </li>
          <li>
            <a class="fs-100 fs-montserrat bold-500" href="AddCar.php">Annonce</a>
          </li>
          <li>
          </li>
          <li>
          </li>
          <li>
          </li>
          <li>
            <a class="fs-100 fs-montserrat bold-500" href="index.php"> Deconnection </a>
        </ul>
      </nav>
    </div>

    <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
  </header>



  <!-- ===================Shop Feature Section============================ -->

  <!-- <section class="shop-feature bg-gray grid">
    <div>
      <p class="fs-montserrat text-black">
        Home <span aria-hidden="true" class="margin">></span> Product
      </p>
    </div>
    <h2 class="fs-poppins fs-300 bold-700">Cars</h2>
  </section> -->

  <!-- ===================Section 2---------------------- -->



  <main class="shop-main-container grid">
    <!-- -------------------Inner Section=============== -->

    <div>
      <div class="shop-title flex">
        <div>
          <h2 class="fs-poppins fs-300">Shop</h2>
          <p class="fs-montserrat">Showing results filtered results</p>
        </div>
        <div>
          <select name="text" id="" class="fs-poppins bg-black text-white">
            <option value="">Filter</option>
            <option value="">Sort By popularity</option>
            <option value="">Sort By latest</option>
            <option value="">Short By price: Low To High</option>
            <option value="">Short By price: High To Low</option>
          </select>
        </div>
      </div>
      <!-- ---------------End----Inner Section=============== -->


      <section class="shop-product grid">
        <?php foreach ($pub as $pb) { ?>
          <div class="category bg-black grid">
            <div>
              <h3 class="text-white fs-50 fs-montserrat bold">
                <?php echo $pb['prix']; ?> <span class="block fs-300 fs-poppins bold"><?php echo $pb['modele']; ?></span><span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"><?php echo $pb['marque']; ?></span>
              </h3>
              <button class="prdduct-btn large-btn text-yellow bg-white fs-montserrat" onclick="window.location.href='description1.php?id=<?php echo $pb['id_voiture']; ?>';">
                Description
              </button>
            </div>
            <div class="product-img2">
              <img src="img/<?php echo $pb['name']; ?>" width="240" height="170">
            </div>
          </div>
        <?php } ?>
      </section>

    <!--  -->

        <!-- <div class="next-page fs-poppins flex ">
            <span class="bg-red text-white active bold-800">1</span>
            <span class="bold-800 text-black">2</span>
            <span><i class="uil text-red uil-angle-double-right"></i></span>
        </div> -->
      </div>
      <section>
        <div class="sidebar-search text-black bg-gray flex">
          <input
            type="text"
            placeholder="Search Here"
            class="fs-montserrat bg-gray"
          />
          <div>
            <i class="uil bg-red text-white uil-search"></i>
          </div>
        </div>

      
        <aside class="sidebar-category">
          <div class="category-list flex">
            <h3 class=" fs-poppins bold-700 fs-200">Car Categories</h3>
            <i id="arrow" class="uil uil-angle-right" data-category="false"></i>
          </div>

          <div class="shop-category-list">
            <ul id="side-nav" class="sidebar-nav grid" data-category="false">
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Toyota</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Ford</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#">Peugeot</a>
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Mercerdes</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#">Hyundai</a>
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Volswagen</a
                >
              </li>
              <li>
                <a class="fs-montserrat text-black bold-500" href="#"
                  >Uncategorized</a
                >
              </li>
            </ul>
          </div>
        </aside>
      </section>
  </main>






  <!-- =====================Footer Section================ -->

  <footer>

    <!-- =============Brands================= -->
    <section class="brands grid">
      <div>
        <img src="/img/br-1.png" alt="">
      </div>
      <div>
        <img src="/img/br-2.png" alt="">
      </div>
      <div>
        <img src="/img/br-3.png" alt="">
      </div>
      <div>
        <img src="/img/br-4.png" alt="">
      </div>
      <div>
        <img src="/img/br-5.png" alt="">
      </div>
    </section>

    <!-- =============Footer Menu=================== -->
    <section class="footer grid">
      <div class="footer-logo grid">
        <img src="/img/logo.png" alt="">
        <p class="fs-montserrat fs-200">There are many variations passages of Lorem Ipsum available, but the majority have</p>
        <div class="social-media flex">
          <i class="uil uil-facebook-f"></i>
          <i class="uil uil-instagram"></i>
          <i class="uil uil-linkedin"></i>
          <i class="uil uil-twitter"></i>
        </div>
      </div>

      <div class="footer-menu grid">
        <h3 class="fs-poppins fs-200 bold-800">Quick Links</h3>
        <ul>
          <li><a class="fs-montserrat text-black fs-200" href="#">Home</a></li>
          <li><a class="fs-montserrat text-black fs-200" href="#">About</a></li>
          <li><a class="fs-montserrat text-black fs-200" href="#">Shop</a></li>
          <li><a class="fs-montserrat text-black fs-200" href="#">Contact</a></li>
        </ul>
      </div>

      <div class="contact grid">

        <h3 class="fs-poppins fs-200 bold-800">Contact</h3>
        <p class="fs-montserrat">+99 (0) 101 0000 888 Patricia C. Amedee 4401 Waldeck Street Grapevine Nashville, Tx 76051</p>
      </div>

      <div class="emails grid">
        <h3 class="fs-poppins fs-200 bold-800">Subscribe To Our Email</h3>
        <p class="updates fs-poppins fs-300 bold-800">For Latest News & Updates</p>
        <div class="inputField flex bg-gray">
          <input type="email" placeholder="Enter Your Email" class="fs-montserrat bg-gray">
          <button class="bg-red text-white fs-poppins fs-50">Subscribe</button>
        </div>
      </div>
    </section>

    <section class="copyRight">
      <p class="c-font fs-montserrat fs-200">© 2022 eStore. All rights reserved.</p>
      <p class="fs-montserrat fs-100 text-align p-top">Privacy Policy . Term Condition</p>
    </section>

  </footer>
</body>

</html>