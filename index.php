<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
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
    <div class="box effect2 effect3"></div>
    <div class="slideshow-container">
        <div class="slidershow-container-2"></div>
        <div class="sc-2"></div>
        <div class="myslides fade">
            <img src="img/battlefield-3-operation-metro-wallpaper-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/bigstock-219214426-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/battlefield-3-operation-metro-wallpaper-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/rick-yancey-soundtrack-article-main-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/battlefield-3-operation-metro-wallpaper-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/rick-yancey-soundtrack-article-main-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/battlefield-3-operation-metro-wallpaper-960x450.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="myslides fade">
            <img src="img/bigstock-219214426-960x450.jpg">
        </div>
        <div class="myslides fade">
            <img src="img/books-jar-lights-bokeh-hd-wallpaper-900x300.jpg" sizes="(max-width: 2000px) 100vw, 2000px">
        </div>
        <div class="prev-border"></div>
        <div class="next-border"></div>
        <!--
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
-->
        <!--<div class="back-black"></div>-->
        <div class="arrows prev" onclick="plusSlides(-1)"></div>
        <div class="arrows next" onclick="plusSlides(1)"></div>


        <div class="numbers">

            <span class="dots" onclick="currentSlide(1)">1</span>
            <span class="dots" onclick="currentSlide(2)">2</span>
            <span class="dots" onclick="currentSlide(3)">3</span>
            <span class="dots" onclick="currentSlide(4)">4</span>
            <span class="dots" onclick="currentSlide(5)">5</span>
            <span class="dots" onclick="currentSlide(6)">6</span>
            <span class="dots" onclick="currentSlide(7)">7</span>
            <span class="dots" onclick="currentSlide(8)">8</span>
            <span class="dots" onclick="currentSlide(9)">9</span>


        </div>

    </div>
    <div class="backgro">
        <hr class="footer-line">
        <img class="footer-line" src="img/hr-shadow.png" alt="">
        <div class="aaa"></div>
        <div class="bbb"></div>
        <div class="ccc">
            <img src="img/logo.png" alt="">
        </div>
    </div>
    <div class="ddd"></div>
    <div class="container">
        <ul class="row">
            <li class="col col-1">
                <img src="img/row-01.png" alt="">
                <div class="text">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
                </div>
                <button class="butt btn-1">See The Work
                <img src="img/footer/butt-shadow.png" alt=""></button>
            </li>
            <li class="col col-2">
                <img src="img/col-02.png" alt="">
                <div class="text">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
                </div>
                <button class="butt btn-2">See The Work
                <img src="img/footer/butt-shadow.png" alt=""></button>
            </li>
            <li class="col col-3">
                <img src="img/col-03.png" alt="">
                <div class="text">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
                </div>
                <button class="butt btn-3">See The Work
                <img src="img/footer/butt-shadow.png" alt=""></button>
            </li>
            <li class="col col-4">
                <img src="img/col-04.png" alt="">
                <div class="text">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
                </div>
                <button class="butt btn-4">See The Work
                <img src="img/footer/butt-shadow.png" alt=""></button>
            </li>
        </ul>
    </div>

    <footer class="foot">
        <ul class="recept-posts">
            <p id="recent">Recent Posts</p>
            <li class="foot-images">
                <img src="img/footer/foot-01.png">
                <p class="img-details fonts">Hendret Porinc Epenendx</p>
                <p class="details">Quisque ut purus ac metus aliquet fringilla id in augue. Sed a sapien quam, sit amet....</p>
            </li>
            <li class="foot-images">
                <img src="img/footer/foot-02.png">
                <p class="img-details fonts">Sem Quis Diam</p>
                <p class="details">Quisque ut purus ac metus aliquet fringilla id in augue. </p>
            </li>
            <li class="foot-images">
                <img src="img/footer/foot-03.png">
                <p class="img-details fonts">Metus Alt Oranre Nisi</p>
                <p class="details">Quisque ut purus ac metus aliquet fringilla id in augue. Sed a sapien quam, sit amet....</p>
            </li>
        </ul>
        <div class="social-item">
            <p>Keep Up With Us</p>
            <ul class="icons">
                <li class="i-01">
                    <a href="http://w3schools.com">
                        <img src="img/footer/social-01.png">
                    </a>
                </li>
                <li class="i-02">
                    <a href="http://twitter.com">
                        <img src="img/footer/social-02.png">
                    </a>
                </li>
                <li class="i-03">
                    <a href="http://instagram.com">
                        <img src="img/footer/social-03.png">
                    </a>
                </li>
                <li class="i-04">
                    <a href="http://google.com">
                        <img src="img/footer/social-04.png">
                    </a>
                </li>
                <li class="i-05">
                    <a href="http://facebook.com">
                        <img src="img/footer/social-05.png">
                    </a>
                </li>
            </ul>
        </div>
        <div class="comunication">
            <p class="par">The Old Fashioned Way</p>
            <p class="cont">
                <img src="img/footer/phone.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone: <i>888.556.4563</i></p>
            <p class="cont">
                <img src="img/footer/message.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <i>joeschmoe@mail.com</i></p>
            <p class="cont">
                <img src="img/footer/home.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address: <i>1235 That Street N.  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;City, State 33569</i></p>
        </div>

        <div class="contact">
            <div class="container">
                <p>Reach Out To Us</p>
                <form class="contact-form" action="">
                    <input type="text"> name*<br>
                    <input type="text"> email*<br>
                    <textarea rows="10" cols="28"> </textarea><br>
                    <input type="submit" value="Submit" style="float: right;">
                </form>
            </div>
        </div>
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
                        <p class="foot-nav-item">© 2010 All Rights Reserved PSD Style</p>
                    </ul>
                </div>
            </nav>
        </div>

    </footer>
    <script src="javascript.js"></script>
    <script src="Temp/js/plugins.js"></script>
    <script src="Temp/js/main.js"></script>
</body>

</html>
