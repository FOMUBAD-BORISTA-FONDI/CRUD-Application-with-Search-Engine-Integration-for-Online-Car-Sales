<?php 
$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");

$id = $_GET['id'];
    
class Pub{
        public function fetch_all(){
            global $connexion, $id;

            $squery = $connexion-> prepare("SELECT * FROM Annonces WHERE id_Annonce = '$id' ");
            $squery->execute();

            return $squery->fetchAll();
        }
    }
$publicite = new Pub;
$pub = $publicite->fetch_all();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>desciption</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="shop.css" />
    <link rel="stylesheet" href="product.css" />
</head>
<body bgcolor="grey">
<?php foreach ($pub as $pb) { ?>
      <section class="single-product grid">
      <div>
      <img src="img/<?php echo $pb['name']; ?>" >
      </div>
    <div class="product-info grid">
        <h1 class="fs-poppins fs-400 blod-900">Marque : <?php echo $pb['marque'] ;?></h1>
        
        <div class="price">
          <p class="bold-700 fs-poppins fs-300">Modele : <?php echo $pb['model'] ;?></p>
        </div>
        <div class="price">
          <p class="bold-700 fs-poppins fs-300"><?php echo $pb['prix'] ;?>$</p>
        </div>

        <div class="price">
          <p class="bold-700 fs-poppins fs-300">Auteur : <?php echo $pb['session'] ;?></p>
        </div>

        <div>
          <p class="fs-montserrat lineheight">
          <?php echo $pb['description'] ;?>
          </p>
        </div>
        
        <div class="product-add-cart flex">
        <button class="product-btn large-btn bg-green text-white fs-poppins fs-50"  ><a href="edit.php?id=<?php echo $id; ?>">Modifier</a></button>
        <button class="product-btn large-btn bg-green text-white fs-poppins fs-50"  ><a href="del.php?id=<?php echo $id; ?>">Suprimer</a></button>
         
    </div>

    </section> 
    <?php } ?>  
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