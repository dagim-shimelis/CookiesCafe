<?php 
########################################
######      MENU PAGE           #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe |MENU"; #in head-html.php
$activeMenu = "active"; #in navigation-html.php
$heroSubHeadline = "c</span>heck out the"; #in hero-html.php
$heroHeadline = "menu"; #in hero-html.php
$heroMoto = "we provide a veraity of <span id=\"newline\">choices</span>"; #in hero-html.php
$aboutTitle= "ABOUT THE MENU";    #in footer-html.php
$aboutContent= "As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems." ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
<!--  DESTINCT STYLE FOR THE MENU PAGE 
<link rel="stylesheet" href="./css2/menustyle.css">
---------------------- style for this page only -------------------------->

<?php
require_once("includes/styles/menu-style.php");
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

<div class="menux-all-box container">
            <div class="menux-bg">
                <div class="single-menu cutout1 cutout-right">
                    <div class="menux-pic pic-right head1">
                        <img href="">
                    </div>
                    <div class="menux-content  menux-left">
                        <div class="menux-text">
                            <div class="menux-title">Menu</div>
                            <div class="the-menu-names">
                                <ul>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-menu cutout2 cutout-left">
                    <div class="menux-pic pic-left head2">
                        <img href="">
                    </div>
                    <div class="menux-content  menux-right">
                        <div class="menux-text">
                            <div class="menux-title">Menu</div>
                            <div class="the-menu-names">
                                <ul>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-menu cutout3 cutout-right">
                    <div class="menux-pic pic-right head3">
                        <img href="">
                    </div>
                    <div class="menux-content  menux-left">
                        <div class="menux-text">
                            <div class="menux-title">Menu</div>
                            <div class="the-menu-names">
                                <ul>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-menu cutout4 cutout-left">
                    <div class="menux-pic pic-left head4">
                        <img href="">
                    </div>
                    <div class="menux-content menux-right">
                        <div class="menux-text">
                            <div class="menux-title">Menu</div>
                            <div class="the-menu-names">
                                <ul>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-menu cutout5 cutout-right">
                    <div class="menux-pic pic-right head5">
                        <img href="">
                    </div>
                    <div class="menux-content  menux-left">
                        <div class="menux-text">
                            <div class="menux-title">Menu</div>
                            <div class="the-menu-names">
                                <ul>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                    <li>meal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-online">
            <a href="order.html">
                <button class="order-btn btn">
                    <div class="clap">
                        <p>order online</p>
                        <i class="fas fa-hands"></i>
                    </div>
                    <!-- <div class="pick-again">
                    <p>pick again</p><i class="fas fa-chevron-up"></i>
                </div> -->
                </button>
            </a>
        </div>

        
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