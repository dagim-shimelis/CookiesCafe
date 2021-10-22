<?php 
########################################
######       CONTACT PAGE           #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe |Contact Us"; #in head-html.php
$activeContact = "active"; #in navigation-html.php
$heroSubHeadline = "G</span>et in touch &amp;"; #in hero-html.php
$heroHeadline = "contact us"; #in hero-html.php
$heroMoto = "we are here to serve <span id=\"newline\">you.</span>"; #in hero-html.php
$aboutTitle= "MORE ABOUT US";    #in footer-html.php
$aboutContent= "As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems." ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
<!----------------------- style for this page only -----------------------
<link rel="stylesheet" href="./css2/contactUs.css">
-->
<?php
 require_once("includes/styles/contact-style.php");
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


