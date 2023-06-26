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
              <a class="fs-100 fs-montserrat bold-500" href="index_user.php"
                >Home</a
              >
            </li>
            <li>
              <a class="active fs-100 fs-montserrat bold-500" href="shop.php">Voitures</a>
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="AddCar.php"
                >Annonce</a
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

     

      <main class="shop-main-container grid">
        <!-- -------------------Inner Section=============== -->

        <div>
          <div class="shop-title flex">
            <div>
              <h2 class="fs-poppins fs-300">Shop</h2>
              <p class="fs-montserrat">Showing 1-9 of 10 results</p>
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

        <!-- ==============Shop-product====================== -->

        <section class="shop-product grid">
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat"><a href="product.php">View Product</a>
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>

            <!-- ===============Pop-Up========================== -->

            <!-- <div class="pup-up">
                <p class="fs-poppins">Sell</p>
            </div> -->

            <!-- ===============Pop-Up========================== -->

          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat"><a href="product.html">View Product</a>
                <!-- Add To Cart -->
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                View Product
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
               View Product
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
              View Product
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
               <!-- ===============Pop-Up========================== -->

               <!-- <div class="pup-up">
                <p class="fs-poppins">Sell</p>
            </div> -->

            <!-- ===============Pop-Up========================== -->
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
              View Product
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
              View Product
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
              View Product              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
               <!-- ===============Pop-Up========================== -->
            <!-- <div class="pup-up">
                <p class="fs-poppins">Sell</p>
            </div> -->

            <!-- ===============Pop-Up========================== -->
          </div>
          <div class="product-list grid">
            <img src="img/p-3.jpg" alt="" />
            <p class="fs-montserrat bold-600">Beats</p>
            <div class="shop-btn flex">
              <button class="bg-red text-white fs-montserrat">
                Add To Cart
              </button>
              <p class="fs-montserrat bold-700">$ 995.00</p>
            </div>
          </div>
        </section>

        <!-- <div class="next-page fs-poppins flex ">
            <span class="bg-red text-white active bold-800">1</span>
            <span class="bold-800 text-black">2</span>
            <span><i class="uil text-red uil-angle-double-right"></i></span>
        </div> -->
      </div>
      <!-- ==============Shop-product====================== -->
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






   
    
     <section class="copyRight">
      <p class="c-font fs-montserrat fs-200">© 2022 eStore. All rights reserved.</p>
      <p class="fs-montserrat fs-100 text-align p-top">Privacy Policy . Term Condition</p>
     </section>
    
      </footer>
  </body>
</html>
