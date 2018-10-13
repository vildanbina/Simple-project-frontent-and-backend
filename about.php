<?php require("php/includes/pdoconfig.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="about-stylesheet.css">
    <link rel="stylesheet" href="Temp/css/fonts.css">
    <link rel="stylesheet" href="Temp/css/base.css">
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

    <div class="container-img">
        <img src="img/battlefield-3-operation-metro-wallpaper-960x450.jpg" alt="">
    </div>
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">
        <div class="row">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    Learn More About Us.
                </h1>
            </div>
            <!-- end s-content__header -->


            <div class="col-full ">
                <div class="row block-1-2">
                    <?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDescriotion from blog_posts ORDER BY postID desc limit 4;');
				while($row = $stmt->fetch()){
					echo'<div class="col-block">';		
					echo '<h3 class="quarter">'.$row['postTitle'].'</h3>';
					echo '<p>' .$row['postDescriotion'].'</p>';
					echo '</div>';
					}
			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

                </div>
            </div>
        </div>
    </section>
    <!-- s-content -->
    <div class="aaa"></div>
    <div class="bbb"></div>
    <div class="ccc">
        <img src="img/logo.png" alt="">
    </div>
    <div class="ddd"> </div>

    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="Temp/images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5 style="width: 57%;"><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="Temp/images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5 style="width: 57%;"><a href="#0">Key Benefits Of Family Photography.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="Temp/images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5 style="width: 57%;"><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="Temp/images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5 style="width: 57%;"><a href="#0">Throwback To The Good Old Days.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                </div>
                <!-- end popular_posts -->
            </div>
            <!-- end popular -->

            <div class="col-four md-six tab-full about">
                <h3>About Philosophy</h3>

                <p>
                    Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus
                </p>
            </div>
            <!-- end about -->

        </div>
        <!-- end row -->
    </section>

    <div class="FooterNav">
        <nav class="container">
            <div class="menu-items">
                <ul id="primary-menu-footer" class="container">
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Services</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Typography</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Products</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="foot-nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <!--                        <li id = "all-right">-->
                    <!--                        </li>-->
                    <p class="">© 2010 All Rights Reserved PSD Style</p>
                </ul>
            </div>
        </nav>
    </div>

    <!--    </footer>-->
    <script src="javascript.js"></script>
    <script src="Temp/js/jquery-3.2.1.min.js"></script>
    <script src="Temp/js/plugins.js"></script>
    <script src="Temp/js/main.js"></script>
</body>

</html>
