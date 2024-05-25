<?php

// database connection 
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM food_items WHERE CanteenID = 104");
$canteen = mysqli_query($mysqli, "SELECT * FROM canteen_info WHERE Cant_id = 108");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HADI HASAN HALL</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>

<body>
    <div class="navBar">
        <div class="logo">
            <img src="images/amuLogo.png" alt="AMU Logo">
        </div>
        <h1 class="m-r">HADI HASAN HALL CANTEEN</h1>
    </div>

    <div class="search-zh">
        <form action="search.php" method="get">
            <input type="text" id="search" name="search" placeholder="Search for food">
            <input type="submit" value="Search" name="submit">
        </form>
    </div>

    <div class="food-items-container">
        <h1>Food Menu</h1>
        <div class="food-items">
            <?php 
            while($food_items = mysqli_fetch_array($result)) { 
            echo "<div class='item'>";
            echo "<img src='". $food_items['image_url']. "'alt'" . $food_items['Item_name']. "'/>";
             echo   "<div>";
                    echo "<h3>". $food_items['Item_name']."</h3>";
                    echo "<p>" . $food_items ['rates']. "</p>";
                echo "</div>";
            echo "</div>";    
            }
            ?>
        </div>
    </div>
    <div class="map-container">
        <div id="map" class="map">
            <!-- Your map will be embedded here -->
        </div>
        <div class="details">
            <?php
            while ($canteen_details = mysqli_fetch_array($canteen)){
            echo"<h2>".$canteen_details['Cant_name']."</h2>";
            echo"<p><strong>Address: </strong>" .$canteen_details['Cant_loc']."</p>";
            echo"<p><strong>Opening Hours: </strong>" . $canteen_details['Cant_time']."</p>";
            }
            ?>
        </div>
    </div>
    <div class="footer"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="script.js"></script>

</body>

</html>