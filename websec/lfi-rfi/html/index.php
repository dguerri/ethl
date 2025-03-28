<!DOCTYPE html>
<?php
session_start();
if (isset($_GET['language'])) {
    $lang = $_GET['language'];
} else {
    $lang = "en.php";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wine Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="navbar">
        <a href="#home">Wine Blog</a>
        <div class="dropdown">
            <button class="dropbtn">Language
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?language=en.php">English</a>
                <a href="index.php?language=it.php">Italian</a>
            </div>
        </div>
    </div>
    
    <div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(./wine1.jpg)"></div>
            <ul class="details">
                <li class="author"><a href="#">Sommelier John</a></li>
                <li class="date">Feb. 9, 2025</li>
            </ul>
        </div>
        <div class="description">
            <h1>Exploring Italian Wines</h1>
            <h2>The Elegance of Sangiovese</h2>
            <?php
            $_SESSION['selected_language'] = $lang;
            $_SESSION['preference'] = $lang == "en.php" ? "English" : "Italian";
            include($lang);
            echo $p1;
            ?>
            <p class="read-more">
                <a href="#">Read More</a>
            </p>
        </div>
    </div>
    
    <div class="blog-card alt">
        <div class="meta">
            <div class="photo" style="background-image: url(./wine2.jpg)"></div>
            <ul class="details">
                <li class="author"><a href="#">Jane Somm</a></li>
                <li class="date">Jan. 28, 2025</li>
            </ul>
        </div>
        <div class="description">
            <h1>The Art of Wine Tasting</h1>
            <h2>How to Identify Aromas and Flavors</h2>
            <?php
            echo $p2;
            ?>
            <p class="read-more">
                <a href="#">Read More</a>
            </p>
        </div>
    </div>
</body>

</html>
