<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id_voiture = $_POST['id_voiture'];
    $mark = $_POST['mark'];
    $price = $_POST['price'];
    $model = $_POST['model'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // Check for empty fields
    if (empty($mark) || empty($price) || empty($model)) {
        if (empty($mark)) {
            echo "<font color='red'>mark field is empty.</font><br/>";
        }
        
        if (empty($price)) {
            echo "<font color='red'>price field is empty.</font><br/>";
        }
        
        if (empty($model)) {
            echo "<font color='red'>model field is empty.</font><br/>";
        }
        if (empty($description)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
    } else {
        // Prepare the update statement
        $query = "UPDATE Voiture SET mark = :mark, price = :price, model = :model, description = :description WHERE id_voiture = :id_voiture";
        $stmt = $connexion->prepare($query);

        // Bind the parameters
        $stmt->bindParam(':mark', $mark);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id_voiture', $id_voiture);

        // Execute the update statement
        $stmt->execute();

        // Display success message
        echo "<p><font color='green'>Data updated successfully!</p>";
        echo "<a href='index.php'>View Result</a>";
    }
}
