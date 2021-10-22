<?php 
########################################
######       LOCATIONS PAGE      #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe |Locations"; #in head-html.php
$activeLocation = "active"; #in navigation-html.php
$heroSubHeadline = "l</span>ocate"; #in hero-html.php
$heroHeadline = "every branch"; #in hero-html.php
$heroMoto = "come and enjoy<span id=\"newline\"> your time.</span>"; #in hero-html.php
$locationFooter="location-footer";
$aboutTitle= "ABOUT OUR BRANCHES";    #in footer-html.php
$aboutContent= "As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems." ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
 <!-- OWL CARASOL STYLE-->
 <link rel="stylesheet" href="./css2/owl.carousel.min.css">
<link rel="stylesheet" href="./css2/owl.theme.default.min.css">

<!-- DESTINCT STYLE FOR THE LOCATION PAGE -->
<link rel="stylesheet" href="./css2/locationstyle.css">

</head>
<!--main loader page and body page starts here-->
<body id="body">
<?php
require_once("includes/loader-html.php");
?>

<!--main body page -->
  <div id="everything" onload="loaded()">
<?php 
 require_once("includes/navigation-html.php");
 require_once("includes/hero-html.php");
?>
<!-- DISTINCT LOCATION PAGE CONTAINT-->

<!-- LOCATION DISCRIPTION PART 1-->

<section class="location-discription">
        <div class="container">
            <div class="restaurant-info location-info">
                <div class="restaurant-description padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                    <div class="global-headline">
                        <h1 class="headline  ">how to find us</h1>
                        <div class="cookie"><i class="fas fa-cookie-bite"></i></div>
                    </div>
                    <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.....</p>
                </div>
                <div class="restaurant-info-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                    <img src="images2/Map-light2.png" alt="resturant info pic">
                </div>
            </div>
        </div>
    </section>

<!-- LOCATION DISCRIPTION PART 2-->


    <section class="location-discription-2">
        <div class="container">
            <div class="restaurant-info location-info">
                <div class="restaurant-description padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">

                    <p>....As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                </div>
                <div class="restaurant-info-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                    <img src="images2/gpsguy.png" alt="resturant info pic">
                </div>
            </div>
        </div>
    </section>

<!-- ALL THE GPS SLAYDING CONTENT-->

    <section class="gps-slide-page">
        <div class="container">
            <div class="gps-main-title">
                <div class="global-headline">
                    <h1 class="headline  ">pick the one closest to you</h1>
                    <div class="cookie"></div>
                </div>
            </div>

<!-- ALL GPS CARASOAL -->
        

            <div class="gps-slides">
                <div class="owl-carousel owl-theme menu-post" id="cakes-post">
<!--BOLE CARASOLE DISPLAY BOTTON -->
            
                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick=' goToLocation(this)'>
                                <h3>bole</h3>
                            </button>
                            <div class="gps-id">bole</div>
                        </div>
                    </div>
<!--KALITY CARASOLE DISPLAY BOTTON -->

                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick="goToLocation(this)">
                                <h3>kality</h3>
                            </button>
                            <div class="gps-id">kality</div>
                        </div>
                    </div>
<!--ADAMA CARASOLE DISPLAY BOTTON -->

                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick="goToLocation(this)">
                                <h3>adama</h3>
                            </button>
                            <div class="gps-id">adama</div>
                        </div>
                    </div>
<!--PIASSA CARASOLE DISPLAY BOTTON -->

                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick="goToLocation(this)">
                                <h3>piassa</h3>
                            </button>
                            <div class="gps-id">piassa</div>
                        </div>
                    </div>
<!--SARIS CARASOLE DISPLAY BOTTON -->

                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick="goToLocation(this)">
                                <h3>saris</h3>
                            </button>
                            <div class="gps-id">saris</div>
                        </div>
                    </div>
<!--MEXICO CARASOLE DISPLAY BOTTON -->

                    <div class="slider-content">
                        <img class="menu-img gps-img" src="images2/gps-slider.png" alt="menu pic">
                        <div class="main-title location-name">

                            <button id="location-btn" type="button" onclick="goToLocation(this)">
                                <h3>mexico</h3>
                            </button>
                            <div class="gps-id">mexico</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--OOO ALL THE GPS SLAYDING CONTENT OOO-->

<!-- 
 JUST SOME SPACE !!!!
    <section>
        <div class="endin-space">

        </div>
    </section>
-->
<!-- ALL THE GPS POPUP CONTENT-->

<!--BOLE POPUP DISPLAY  -->

    <section class="gps-pop-up" id="bole">

        <div class="gps-discription container">

            <div class="gps-bole">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("bole")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/map1.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--ABC mall,2nd floor</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--12345</li>
                        <li><i class="fa fa-phone"></i>TEL--0911121314</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

<!--KALITY POPUP DISPLAY  -->


    <section class="gps-pop-up" id="kality">

        <div class="gps-discription container">

            <div class="gps-kality">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("kality")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/kaliyt-map.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--DEF park,main gate</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--23456</li>
                        <li><i class="fa fa-phone"></i>TEL--0912457845</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

<!--ADAMA POPUP DISPLAY  -->


    <section class="gps-pop-up" id="adama">

        <div class="gps-discription container">

            <div class="gps-adama">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("adama")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/adama-map.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--GGH Building,4th floor</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--34567</li>
                        <li><i class="fa fa-phone"></i>TEL--0932569874</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

<!--PIASSA POPUP DISPLAY  -->



    <section class="gps-pop-up" id="piassa">

        <div class="gps-discription container">

            <div class="gps-piassa">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("piassa")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/piassa-map.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--XYZ mall,2nd floor</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--45678</li>
                        <li><i class="fa fa-phone"></i>TEL--0924856987</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

<!--SARIS POPUP DISPLAY  -->


    <section class="gps-pop-up" id="saris">

        <div class="gps-discription container">

            <div class="gps-saris">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("saris")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/saris-map.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--TTY mall,2nd floor</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--56789</li>
                        <li><i class="fa fa-phone"></i>TEL--0945781298</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

<!--MEXICO POPUP DISPLAY  -->


    <section class="gps-pop-up" id="mexico">

        <div class="gps-discription container">

            <div class="gps-mexico">
                <div class="gps-close">
                    <i class="fa fa-times" onclick='gpsClose("mexico")'></i>
                </div>
                <div class="gps-map">
                    <img src="images2/mexico-map.png">
                </div>
                <div class="gps-text-content">
                    <ul>
                        <li><i class="fa fa-map-signs"></i>ADDRESS--SED mall,3rd floor</li>
                        <li><i class="fa fa-inbox"></i>P.BOX--98765</li>
                        <li><i class="fa fa-phone"></i>TEL--0928653214</li>
                        <li class="gpslink"><a href="#"><i class="fa fa-map-marked"></i>GPS LOCATION.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    
<!-- ALL THE GPS POPUP CONTENT-->


<!-- FOOTER SECTION -->
<footer>

<!-- FOOTER SMALL CITY ANIMATION SECTION -->

<div class="small-city-box">
            <div class="small-city">
                <div class="all-town-pic">
                <img class="town-front1" src="images2/town1.png">
                <img class="town-front2" src="images2/town1.png">
                <img class="town-front3" src="images2/town1.png">
                <img class="town-front4" src="images2/town1.png">
                </div>
                
                <p class="town-middle">cookies cafe</p>
                
                
            </div>

        </div>
<!--OOO FOOTER SMALL CITY ANIMATION SECTION OOO-->


<?php require_once("includes/footer-html.php") ?>
</footer>
<!--OOO FOOTER SECTION OOO-->

<!-- ENDING OF THE EVERYTHING CLASS DIV THE THE HOME PAGE -->
</div>


<!-- JQUERY SCRIPT -->
<script src="./js2/Jquery3.4.1.min.js"></script>
    <!----OWL CAROUSEL SCRIPT--->
    <script src="./js2/owl.carousel.min.js"></script>
    <!-- ANIMATE ON SCROLL SCRIPT -->
    <script src="./js2/aos.js"></script>
    <!-- MAIN SCRIPT FOR LOADING AND ... -->
    <script src="./js2/main.js"></script>
<!-- MAIN SCRIPT FOR POPUP AND BUTTONS... -->
    <script src="./js2/orderprocess.js"></script>
<!-- MAIN SCRIPT FOR POPUP AND BUTTONS 2... -->
    <script src="./js2/locationprocess.js"></script>

    </body>
</html>