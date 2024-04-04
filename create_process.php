<?php
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];

$image = $_FILES['image'];

if ($image['error'] === UPLOAD_ERR_OK) {
    $tempName = $image['tmp_name'];
    $targetDir = 'images/';
    
    // Generate a unique filename
    $targetName = $targetDir . uniqid() . '_' . basename($image['name']);

    if (move_uploaded_file($tempName, $targetName)) {
        // Insert data into the database
        $sql = "INSERT INTO nikeproducts.products (name, price, image_path) VALUES ('$name', '$price', '$targetName')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file";
    }
} else {
    echo "Error: " . $image['error'];
}
?>
