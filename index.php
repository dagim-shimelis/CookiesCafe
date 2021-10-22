<?php 
########################################
######       HOME PAGE           #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe"; #in head-html.php
$activeHome = "active"; #in navigation-html.php
$heroSubHeadline = "d</span>elcome"; #in hero-html.php
$heroHeadline = "cookies cafe"; #in hero-html.php
$heroMoto = "Make your life a bit more <span id=\"newline\">sweeter.</span>"; #in hero-html.php
$aboutTitle= "ABOUT US";    #in footer-html.php
$aboutContent= "As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems." ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
<!----------------------- style for this page only -------------------------->

<?php
##########require_once("includes/styles/home-style.php");
?>


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
<!-- distinct home page content-->



<!-- DISCOVER OUR STORY SECTION-->
<section class="discover-our-story">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="restaurant-description padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">d</span>
                                    iscover
                            
                                </h2>
                                <h1 class="headline  ">our story</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">Contact Us</a>
                        </div>
                        <div class="restaurant-info-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                            <img src="images2/discover-our-story.jpg" alt="resturant info pic">
                        </div>
                    </div>
                </div>
            </section>
  
<!--OOO DISCOVER OUR STORY SECTION OOO-->

<!-- DISCOVER OUR MENU SECTION-->
            <section class="discover-our-menu">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="image-group padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <img src="./images2/icecream4.jpg" alt="menu pic">
                            <img src="./images2/burger6.jpg" height="100%" alt="menu pic">
                            <img src="./images2/menu-group-2.jpg" alt="menu pic">
                            <img src="./images2/menu-group-4.jpg" alt="menu pic">
                        </div>
                        <div class="restaurant-description" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">c</span>
                                    heck out the
                            
                                </h2>
                                <h1 class="headline  ">menu</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">view the menu</a>
                        </div>
                    </div>
                </div>
            </section>

<!--OOO DISCOVER OUR MENU SECTION OOO-->
            

<!-- TEASTFUL RECIPES SECTION -->

            <section class="tastful-recipes between">
                <div class="container">
                    <div class="global-headline">
                        <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                            <h2 class="sub-headline sub-headline-big">
                                <span class="first-letter first-letter-big">t</span>
                                asteful
                        
                            </h2>
                        </div>
                        <div data-aos="fade-top" data-aos-duration="1000" data-aos-delay="600">
                            <h1 class="headline">recipes</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!---xx--teastful recipes--xx-->
            <section class="food-packs">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="image-group">
                            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/cookie2.jpg" alt="resturant info pic">
                            </div>
                            <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/burger7.jpg" alt="resturant info pic">
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/pizaa3.jpg" alt="resturant info pic">
                            </div>
                            <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/col4.jpg" alt="resturant info pic">
                            </div>
                        </div>
                        <div class="restaurant-description padding-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">A</span>
                                    mazing
                            
                                </h2>
                                <h1 class="headline">chefs</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">order now</a>
                        </div>
                    </div>
                </div>
            </section>         
<!--OOO TEASTFUL RECIPES SECTION OOO-->


<!-- CULINERY DELIGHT SECTION -->
            <section class="culinary-delight">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="restaurant-description padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">c</span>
                                    ulinary
                            
                                </h2>
                                <h1 class="headline  ">delidht</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">check out our location</a>
                        </div>
                        <div class="image-group">
                            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/burger9.jpg" alt="resturant info pic" height="100%">
                            </div>
                            <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                                <img src="images2/pizza9.jpg" height="100%" alt="resturant info pic">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!--OOO CULINERY DELIGHT SECTION OOO-->
           

<!-- THE PERFECT BLEND SECTION -->
            <section class="perfect-blend between">
                <div class="container">
                    <div class="global-headline">
                        <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                            <h2 class="sub-headline sub-headline-big">
                                <span class="first-letter  first-letter-big">t</span>
                                he perfect
                        
                            </h2>
                        </div>
                        <div data-aos="fade-top" data-aos-duration="1000" data-aos-delay="600">
                            <h1 class="headline">blend</h1>
                        </div>
                    </div>
                </div>
            </section>
<!--OOO THE PERFECT BLEND SECTION OOO-->
           
<!-- ORDER FOOD SECTION -->
            <section class="order-food">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="restaurant-info-img" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <img src="images2/order.png" alt="order guy pic">
                        </div>
                        <div class="restaurant-description padding-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">o</span>
                                    rder
                            
                                </h2>
                                <h1 class="headline  ">food online</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">order now</a>
                        </div>
                    </div>
                </div>
            </section>
 <!--OOO ORDER FOOD SECTION OOO-->

 <!-- LOCATION SECTION -->
            <section class="location">
                <div class="container">
                    <div class="restaurant-info">
                        <div class="restaurant-description padding-right" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <div class="global-headline">
                                <h2 class="sub-headline">
                                    <span class="first-letter">l</span>
                                    ocate
                            
                                </h2>
                                <h1 class="headline  ">all our brances</h1>
                                <div class="cookie">
                                    <i class="fas fa-cookie-bite"></i>
                                </div>
                            </div>
                            <p>As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems.</p>
                            <a href="#" class="btn body-btn">get all location</a>
                        </div>
                        <div class="restaurant-info-img" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                            <img src="images2/menu-map.png" alt="map icon pic">
                        </div>
                    </div>
                </div>
            </section>
<!--OOO LOCATION SECTION OOO-->

<!-- FOOTER SECTION -->
<footer>
<?php require_once("includes/footer-html.php") ?>
</footer>
<!--OOO FOOTER SECTION OOO-->

<!-- ENDING OF THE EVERYTHING CLASS DIV THE THE HOME PAGE -->
</div>
<!-- ANIMATE ON SCROLL SCRIPT -->
        <script src="./js2/aos.js"></script>
<!-- MAIN SCRIPT FOR LOADING AND ... -->
        <script src="./js2/main.js"></script>
    </body>
</html>