<?php
// user mysqli_connect for database connection
include_once("config.php");

// Check if the search query is set
if (isset($_GET['search'])) {
    $search = $mysqli->real_escape_string($_GET['search']);

    // Query to search for the food item
    $sql = "SELECT item_no, item_name, rates, CanteenID, image_url 
            FROM food_items 
            WHERE item_name LIKE '%$search%'";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='food-items-container'>";
        echo "<h1>Search Results</h1>";
        echo "<div class='food-items'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='item'>";
            echo "<img src='" . $row['image_url'] . "' alt='" . $row['item_name'] . "' />";
            echo "<div>";
            echo "<h3>" . $row['item_name'] . "</h3>";
            echo "<p>Rate: " . $row['rates'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p>No items found!</p>";
    }
}

$mysqli->close();
?>
