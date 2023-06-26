<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
 >
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="shop.css" />
    <link rel="stylesheet" href="product.css" />
    <script src="index.js" defer></script>
    <script src="product.js" defer></script>
    <style>
        /* Add your custom styles here */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            display: none;
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .popup-close {
            background-color: #ccc;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .containerfirst {
            background-color: #f2f2f2;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 700px;
            margin-left: 15rem;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
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
    </style>
    <title>Carsales Website</title>
  </head>
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
      
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
              <a class="fs-100 fs-montserrat bold-500" href="index.php"
                >Home</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="shop.php"
                >Cars</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="AddCar.php"
                >Add Car</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>

    <section class="single-product grid">
      <div>
        <img src="/image/product-img.jpg" alt="" />
      </div>
      <div class="product-info grid">
        <h1 class="fs-poppins fs-400 blod-900">Beats</h1>
        

        <div class="price">
          <p class="bold-700 fs-poppins fs-300">$ 995.00</p>
        </div>

        <div>
          <p class="fs-montserrat lineheight">
            There are many variations passages of Lorem Ipsum available, but the
            majority have suffered alteration words some form by injected or
            randomized which don't even slightly believable. If you are going to
            use a passage of Lorem Ipsum, you need to be sure there isn't
            anything
          </p>
        </div>

        <div class="product-add-cart flex">
        <button class="product-btn large-btn bg-green text-white fs-poppins fs-50" onclick="showUpdatePopup()">Update</button>
            <button class="product-btn large-btn bg-red text-white fs-poppins fs-50" onclick="showDeletePopup()">Delete</button>
        </div>

        <div>
          <p class="fs-montserrat text-red">
            <!-- <span class="text-black">Category: </span>Headphone -->
          </p>
        </div>
      </div>
    </section>
    
  

<!-- Update Popup -->
<div id="update-popup" class="popup">
    <div class="popup-content">
    <div class="containerfirst">
            <h1>Add New Car</h1>
            <form method="POST" action="process_car.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="carName">Car Name</label>
                    <input type="text" id="carName" name="carName" placeholder="Enter the car name" required>
                </div>
                <div class="form-group">
                    <label for="carDescription">Car Description</label>
                    <textarea id="carDescription" name="carDescription" placeholder="Enter the car description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="carPrice">Car Price</label>
                    <input type="number" id="carPrice" name="carPrice" placeholder="Enter the car price" required>
                </div>
                <div class="form-group">
                    <label for="carMark">Car Mark</label>
                    <select id="carMark" name="carMark" required>
                        <option value="">Select Car Mark</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Ford">Ford</option>
                        <option value="Mercedes">Mercedes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="carImage">Import Image</label>
                    <input type="file" id="carImage" name="carImage" accept="image/*" required>
                </div>
                <div class="form-group">
                    <button type="submit">Add Car</button>
                </div>
            </form>
        </div>
        <button class="popup-close" onclick="hideUpdatePopup()">Close</button>
    </div>
</div>

<!-- Delete Popup -->
<div id="delete-popup" class="popup">
    <div class="popup-content">
        <h2 class="fs-poppins fs-400 bold-900">Delete Popup</h2>
        <p>Are you sure you want to delete this item?</p>
        <div class="popup-buttons">
            <button class="popup-button popup-button-yes" onclick="deleteItem()">Yes</button>
            <button class="popup-button popup-button-no" onclick="hideDeletePopup()">No</button>
        </div>
    </div>
</div>

    <footer>
      <section class="brands grid">
        <div>
          <img src="/image/br-1.png" alt="" />
        </div>
        <div>
          <img src="/image/br-2.png" alt="" />
        </div>
        <div>
          <img src="/image/br-3.png" alt="" />
        </div>
        <div>
          <img src="/image/br-4.png" alt="" />
        </div>
        <div>
          <img src="/image/br-5.png" alt="" />
        </div>
      </section>

      <section class="footer grid">
        <div class="footer-logo grid">
          <!-- <img src="/image/logo.png" alt="" /> -->
          <p class="fs-montserrat fs-200">
            There are many variations passages of Lorem Ipsum available, but the
            majority have
          </p>
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
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Home</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Cars</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Add Car</a>
            </li>
          </ul>
        </div>

        <div class="contact grid">
          <h3 class="fs-poppins fs-200 bold-800">Contact</h3>
          <p class="fs-montserrat">
            +237 670 008 988 Cameroon at the University of Yaounde I
          </p>
        </div>

        <div class="emails grid">
          <h3 class="fs-poppins fs-200 bold-800">Subscribe To Our Email</h3>
          <p class="updates fs-poppins fs-300 bold-800">
            For Latest News & Updates
          </p>
          <div class="inputField flex bg-gray">
            <input
              type="email"
              placeholder="Enter Your Email"
              class="fs-montserrat bg-gray"
            />
            <button class="bg-red text-white fs-poppins fs-50">
              Subscribe
            </button>
          </div>
        </div>
      </section>

      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
          © 2023 carStore. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy . Terms & Conditions
        </p>
      </section>
    </footer>

    <script>
    // JavaScript code to handle the popup functionality
    function showUpdatePopup() {
        var popup = document.getElementById("update-popup");
        popup.style.display = "block";
    }

    function hideUpdatePopup() {
        var popup = document.getElementById("update-popup");
        popup.style.display = "none";
    }

    function showDeletePopup() {
        var popup = document.getElementById("delete-popup");
        popup.style.display = "block";
    }

    function hideDeletePopup() {
        var popup = document.getElementById("delete-popup");
        popup.style.display = "none";
    }

    function deleteItem() {
        // Add your logic to delete the item here
        console.log("Item deleted!");
        hideDeletePopup();
    }
</script>

  </body>
</html>
