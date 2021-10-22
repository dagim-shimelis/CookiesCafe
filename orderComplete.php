
<?php 
########################################
######  ORDER-COMPLETE PAGE     #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe"; #in head-html.php
$heroSubHeadline = ""; #in hero-html.php
$heroHeadline = "ORDER COMPLETE"; #in hero-html.php
$heroMoto = "we will be there<span id=\"newline\">shortly.</span>"; #in hero-html.php
$aboutTitle= "ABOUT DELIVERIES";    #in footer-html.php
$aboutContent= "As I have tried to mention above the main part of philosophy is questioning, questioning of the apparent. Even though philosophers ask about everything, there basic aim is not to learn how to do something or how to solve their problems." ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
<!----------------------- style for this page only -------------------------->

<?php
require_once("includes/styles/home-style.php");
require_once("includes/styles/order-style.php");
####require_once("includes/styles/order-complete-style.php");
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







<div class="verify container" style="display:block;>
        <p>your order has been reacives <spam>seccsesfuly</spam>. we will be there shortly.</p>
        <br><i class="fa fa-id-badge cookie"></i>
        <p>your verification ID is <spam id="vID">---------</spam><br>you will need it to reacive your ourder.<spam> SO SAVE/REMEMBER IT </spam><big> THANK YOU.</big>
        </p>
    </div>


<!--back to up icon from the other pages-->
<div class="last-obj footer-box">
        <div class="back-to-top" style="margin-left:40%;" >
                        <a href="#hero">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
        <div id="copy-right">
            <h4>dagi web design. 2020&copy;</h4>
        </div>
    </div>

    
<?php
##print_r($_POST);
##echo "<br><br>";
##print_r($_FILES);

$myvariabls= array('fullName', 'telNumber', 'telNumber2','locationText','extraOrderText','orderList');
$submitedvalues= array($_POST['fullName'],$_POST['telNumber'],$_POST['telNumber2'],$_POST['locationText'],$_POST['extraOrderText'],$_POST['orderList']);
htmlcleaner($myvariabls, $submitedvalues);



/*
echo "<pre>
Full Name       [$fullName]
Tel Number      [$telNumber]
Tel Number2     [$telNumber2]
Location        [$locationText]
Extra Orders    [$extraOrderText]
Order List      [$orderList]

</pre>";

*/






function htmlcleaner($array1 , $array2){
    for ($valuelength=0; $valuelength<7; ++$valuelength){
    global $$array1[$valuelength];
    $$array1[$valuelength]= htmlentities(str_replace('&',"[and]",$array2[$valuelength]));
        }
}


?>