
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
    <link rel="stylesheet" href="product.css" />
    <script src="index.js" defer></script>
    <script src="product.js" defer></script>
    <!-- custon style Sheet & JavaScript -->

    <style>
        body {
            background-color: #cccccc85;
        }
        .containerfirst {
            background-color: #f2f2f2;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 600px;
            margin-left: 15rem;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
            height: 200px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            padding: 8px;
            width: 100%;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group select {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 10px;
            width: 100%;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #524dff;
        }
        footer {
            margin-top: 00px;
        }
        .formulaire input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 40px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        h2 {
            color: #333;
        }

        .marge {
            width: 600px;
            margin: 0 auto;
            background-color: #f5f5f5; 
            padding: 20px;
            border-radius: 1rem;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .rio {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .formulaire input[type="text"],
        .formulaire input[type="number"],
        .formulaire textarea,
        .formulaire input[type="file"],
        .formulaire input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <title>Carsales Website</title>
  </head>
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <!-- <div class="logo">
          <img src="image/logo-te.png" alt="" />
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
              <a class="fs-100 fs-montserrat bold-500" href="index_user.php"
                >Home</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="shoop.php"
                >Annonces</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="AddCar.php"
                >Ajouts</a
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
            Home <span aria-hidden="true" class="margin">></span> AJouter une Anonnce
          </p>
        </div>
        <h2 class="fs-poppins fs-300 bold-700">Annonce</h2>
      </section>
    <center>
        <br><h1>Ajouter une Annonce de Voiture </h1><br>
    </center>
    <div class="marge">
        <form method="post" action="add.php" class="formulaire" enctype="multipart/form-data">
            <input type="text" name="marque" placeholder="Marque de la Voiture" required><br>
            <input type="text" name="modele" placeholder="Modèle de la voiture" required><br>
            <input type="date" name="date" placeholder="La Date" required><br>
            <input type="number" name="prix" placeholder="Prix" required><br>
            <textarea rows="15" cols="52" name="description" placeholder="Description de la voiture" required></textarea><br>
            <input type="file" name="image" placeholder="Image de la voiture" required><br>
            <input type="submit" name="test" value="Charger"> 
        </form>
    </div>


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