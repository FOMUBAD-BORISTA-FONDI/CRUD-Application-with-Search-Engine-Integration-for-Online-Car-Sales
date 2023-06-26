<?php
// Get id_voiture from URL parameter
$id_voiture = $_GET['id_voiture'];

// Establish the database connection
$connexion = new PDO("mysql:host=localhost;dbname=sale_cars_db", "root", "");

// Select data associated with this particular id_voiture
$query = "SELECT * FROM Voiture WHERE id_voiture = :id";
$stmt = $connexion->prepare($query);
$stmt->bindParam(':id', $id_voiture);
$stmt->execute();

// Fetch the row of data
$resultData = $stmt->fetch(PDO::FETCH_ASSOC);

// Retrieve the values from the resultData array
$mark = $resultData['mark'];
$price = $resultData['price'];
$model = $resultData['model'];
$description = $resultData['description'];
$image = $resultData['image'];
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
    
    <form name="edit" method="post" action="editAction.php">
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
