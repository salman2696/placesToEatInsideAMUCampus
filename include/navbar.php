
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places to eat inside AMU</title>
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
</head>

<body>
    <div class="navBar">
        <div class="logo">
            <img src="images/amuLogo.png" alt="AMU Logo">
        </div>
        <h1 class="m-r"><?php
            // Include your database connection file here
            include_once("config.php");
            
            // Check connection
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
            
            // Define the Cant_id for Library Canteen
            $library_cant_id = 110;
            
            // SQL query to select canteen name based on the Cant_id of Library Canteen
            $sql = "SELECT canteen_name FROM canteen_info WHERE Cant_id = 110";
            
            $result = $mysqli->query($sql);
            
            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Output data of the first row
                $row = $result->fetch_assoc();
                $canteen_name = $row["canteen_name"];
                echo $canteen_name;
            } else {
                echo "Canteen Name";
            }
            
            // Close connection
            $mysqli->close();
            ?>
            </h1>
    </div>