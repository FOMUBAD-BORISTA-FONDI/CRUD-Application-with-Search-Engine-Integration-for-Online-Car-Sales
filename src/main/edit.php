 <?php
 Session_start();
$nom = $_SESSION['nom']  ;

// Get id_voiture from URL parameter
$id_voiture = $_GET['id'];


// Establish the database connection
$connexion = new PDO("mysql:host=localhost;dbname=Sale_Cars_DB", "root", "");



// Retrieve the values from the resultData array

$mark = htmlspecialchars($_POST['mark']);

$price = htmlspecialchars($_POST['price']);
$model = htmlspecialchars($_POST['model']);
$description = htmlspecialchars($_POST['description']);
$image = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];

$modif = $connexion->prepare("UPDATE Annonces SET marque='$mark', model='$model', prix='$price', description='$description', name='$image_name', bin='$image'  WHERE id_annonce ='$id_annonce' ");
                $modif->execute();
?>
<html>
<head>    
    <title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
        <a href="index.php">Home</a>
    </p>
    
    <form name="edit" method="post" action="">
        <table border="0">
            <tr> 
                <td>Mark</td>
                <td><input type="text" name="mark" value="<?php echo $mark; ?>"></td>
            </tr>
            <tr> 
                <td>Model</td>
                <td><input type="text" name="model" value="<?php echo $model; ?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo $description; ?>"></td>
            </tr>
            <tr> 
                <td>Image</td>
                <td><input type="file" name="image" value="<?php echo $image; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_voiture" value="<?php echo $id_voiture; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
