<?php
include 'config.php';

// Check if the form is submitted for deleting a product
if(isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM products WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success" role="alert">Product deleted successfully!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting product: ' . mysqli_error($conn) . '</div>';
    }
}

// Retrieve products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        </header>
        <div class="logo">
    <img src="nike.jpg" alt="Nike Logo" class="logo-img">
</div>
        <div class="paragraph-container">
            <h1>Welcome to Nike Order Management</h1>
            <p> When you first land on this webpage, you’re greeted with a vibrant and easy-to-navigate interface. The top of the page features a bold, red navigation bar with links to various sections of the website, such as “Home”, “About”, “History”, and “Contact”. This makes it easy for you to navigate the site and find the information you’re looking for.

Just below the navigation bar, there’s a logo that catches your eye. When you hover over it, it spins around in a playful manner, adding a touch of interactivity and fun to the page.

As you scroll down, you come across a gallery showcasing a variety of shoes. Each shoe is presented with a clear image, allowing you to see the details of the design. The images are large enough to give you a good look at the shoes, but not so large that they overwhelm the page. When you hover over an image, it enlarges slightly, giving you a closer look at the shoe.

Beneath each image, you can see the price of the shoe clearly displayed, along with the name of the shoe. This makes it easy for you to compare prices and styles at a glance.

Overall, the website is user-friendly and visually appealing, making your shopping experience enjoyable and efficient.</p>
        </div>
   

    <div class="container">
        <h1 class="mt-4">Product Catalog</h1>
        <a href="create.php" class="btn btn-primary mb-4">Add New Product</a>
        
        <div class="row">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4">';
                    echo '<img src="' . $row["image_path"] . '" class="card-img-top" alt="' . $row["name"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                    echo '<p class="card-text">Price: $' . $row["price"] . '</p>';
                    echo '<a href="read.php?id=' . $row["id"] . '" class="btn btn-primary mr-2">View</a>';
                    echo '<a href="update.php?id=' . $row["id"] . '" class="btn btn-secondary mr-2">Edit</a>';
                    echo '<a href="index.php?delete_id=' . $row["id"] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this product?\')">Delete</a>';
                    
                    echo '<a href="order.php?id=' . $row["id"] . '" class="btn btn-success">Order</a>';


                    echo '</div></div></div>';
                }
            } else {
                echo '<p>No products available.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
