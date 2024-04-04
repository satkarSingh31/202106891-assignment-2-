<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', stock='$stock' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>
