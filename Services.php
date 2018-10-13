<?php require "php/includes/pdoconfig.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="services-stylesheet.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="Temp/css/fonts.css">
    <script src="Temp/js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <img class="logo-img" src="img/logo.png" alt="">
                <a href="php/index.php"><button class="feedback">
                         Log In
                         <img src="img/feedback-logo.gif" class="feedback-logo">
                         </button></a>

            </div>
        </div>
        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Site Navigation</h2>

            <ul class="header__nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Typography</a>
                </li>
                <li class="has-children">
                    <a class="nav-item" href="#0" title="">Products</a>
                    <ul class="sub-menu">
                        <li><a href="category.html">Lifestyle</a></li>
                        <li><a href="category.html">Health</a></li>
                        <li><a href="category.html">Family</a></li>
                        <li><a href="category.html">Management</a></li>
                        <li><a href="category.html">Travel</a></li>
                        <li><a href="category.html">Work</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="has-children">
                    <a class="nav-item" href="#0" title="">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <input id="input-search" class="form-control" placeholder="Search" aria-label="Search">
                <button id="search-button" class="btn" type="submit"></button>

            </ul>
            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
        </nav>

    </header>
    <div class="row clearfix" style="margin-top: 100px;">
        <?php
try {

    $stmt = $db->query('SELECT * from services order by date desc LIMIT 3 ;');
    while ($row = $stmt->fetch()) {
        echo '<div class="span_4 column" style="background-color:white; padding-left:20px; border:4px solid black; padding-bottom: 15px; width: 280px; height: 500px; margin: 20px;">';
        echo '<h2 style="width: 100%;"><a href="#0">' . $row['title'] . '</a></h2>';

        if ($row['image'] != ""):
            echo '<a href="#0" class="popular__thumb">
									                            <img style="margin-left: 20px;"  width="180" height="170" src="php/services/uploads/' . $row['image'] . '">
									                        </a>';
        endif;

        echo '<p style="width: 67%;">' . $row['description'] . '</p>';
        echo '<section class="popular__meta">
                <span class="popular__date"><span>on</span><br> <time datetime="2017-12-19"><a href="#0">' . $row['date'] . '</a></time></span>
            </section>';
        echo '</div>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

    </div>
    <div class="backgro">
        <div class="aaa"></div>
        <div class="bbb"></div>



        <script src="javascript.js"></script>
        <script src="Temp/js/plugins.js"></script>
        <script src="Temp/js/main.js"></script>
    </div>
</body>

</html>
