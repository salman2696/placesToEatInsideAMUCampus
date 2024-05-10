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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="navBar">
        <div class="logo">
            <img src="images/amuLogo.png">
        </div>
            <?php
            include_once("config.php");
            echo '<div class="list">';
            echo '<a href="#" class="link">Library Canteen</a>';
            echo '<a href="#" class="link">College Canteens</a>';
            echo '<a href="#" class="link">Hall Canteens</a>';
            ?>
            <div class="form-container">
                <form action="/search">
                    <input type="text" placeholder="Search Canteens" name="search">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="main-info">
        <span class="heading-1">
            <h1 style="color: #f15d36;">Places To Eat</h1>
            <h1>Inside AMU Campus</h1>
        </span>
        <img src="images/centenary-gate.jpeg">
    </div>
    <div class="paragraph">
        <p>In <b>Aligarh Muslim university</b>, the array of canteens available caters to the diverse tastes and
            preferences of students and faculty alike. From the convenience of the library canteen to the bustling
            atmospheres of department and hall canteens, there's a plethora of options to explore. Each canteen
            offers its own unique selection of food items, ensuring there's something to satisfy every craving.
            Whether it's a quick snack between classes or a hearty meal to fuel a study session, the canteens serve
            as vibrant hubs of culinary activity on campus. The variety of cuisines and dishes available reflects
            the multicultural nature of our university community, providing students with an opportunity to
            experience flavors from around the world without ever leaving campus grounds.</p>
    </div>
    <div class="heading-2">
        <h1 style="color: #f15d36; font-size: 50px;">Some Famous</h1>
        <h1>AMU Canteens</h1>
    </div>
    <div class="canteen-box">
        <div class="library">
            <img src="images/library-canteen.jpeg">
            <h2>Library Canteen</h2>
            <a href="https://www.google.com/maps/place/W36G%2BQ3R,+AMU+Campus,+Aligarh,+Uttar+Pradesh+202001/@27.9118805,78.074611,21z/data=!4m6!3m5!1s0x3974a4fb1386502f:0x243dde2d17fbe6a5!8m2!3d27.9118605!4d78.0747798!16s%2Fg%2F11b8txcn_y?entry=ttu"
                target="_blank">See Location</a>
            <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="turning-point">
            <img src="images/turning-point.jpeg">
            <h2>Turning Point</h2>
            <a href="https://www.google.com/maps/place/Turning+Point/@27.911869,78.0753685,17z/data=!4m14!1m7!3m6!1s0x3974a4e4c29a615b:0x4ffc19075c9ed4bb!2sTurning+Point!8m2!3d27.9118643!4d78.0779434!16s%2Fg%2F11bx5pp3_9!3m5!1s0x3974a4e4c29a615b:0x4ffc19075c9ed4bb!8m2!3d27.9118643!4d78.0779434!16s%2Fg%2F11bx5pp3_9?entry=ttu"
                target="_blank">See Location</a>
            <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="central-canteen">
            <img src="images/central-canteen.jpg">
            <h2>Central Canteen</h2>
            <a href="#">See Location</a>
            <i class="fa-solid fa-location-dot"></i>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mohammad Salman | All Rights Reserved</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>