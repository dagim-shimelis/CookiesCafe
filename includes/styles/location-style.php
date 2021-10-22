<?php 
$style =<<<_END
<style>
@import url('./fonts.css');
@import url('./styles.css');


.hero {
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/location-hero2.jpg') center no-repeat;
   background-size: cover;
}

.gps-slide-page {
    position: relative;
    width: 100%;
    height: 100vh;
    margin: 10vh auto;
}


.slider-content {
    text-align: center;
    width: 80%;
    margin: 3rem 2rem;
}

.location-name {
    margin: 2rem auto;
}


#location-btn {
    width: 100%;
    padding: 1rem 2rem;
    font-family: abel;
    text-transform: uppercase;
    font-weight: bolder;
    font-size: 15vw;
    background: transparent;
    border: none;
    color: var(--sfc);
    border-bottom: 2px solid var(--sfc);
    outline: none;
}

#location-btn:hover{
    cursor: pointer;
    -webkit-transform: translateY(5px);
            transform: translateY(5px);
}

.gps-pop-up{
  display: none;
    position: fixed;
    z-index: 1000;
    padding-top:20vh;
    left: 0;
    top:0;
    width: 100vw;
    height: 100vh;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(37, 37, 37, 0.4);
}

.gps-discription{
    position: relative;
    background-color: rgba(165, 146, 43, 0.79);
    margin: auto;
    padding: 0;
    border-radius: 10px;
    width: 80%;
    -webkit-box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation: popupTop 0.5s;
            animation: popupTop 0.5s;
}






.gps-map{
   padding-top: 1rem;
    width:90%;
    height:40%;
    margin:1rem auto 0 ;
}

.gps-text-content{
    width: 100%;
    height: 50%;
}
.gps-text-content ul{
    margin: 4rem auto;
    padding: 2rem;
    list-style: none;
}

.gps-text-content ul li{
    margin: 2rem;
    font-size: 6vw;
    color:#000;
    font-weight: bolder;
}

.gpslink{
    text-decoration: none;
    border-bottom: 1px solid #fff;
    -webkit-animation: gpsLink 3s ease infinite;
            animation: gpsLink 3s ease infinite;
    
}

.gps-text-content i{
    font-size: 8vw;
    margin-right:9vw;
    float: left;
}

.gps-close{
    position: absolute;
    color:var(--sfc);
    float: right;
    right: -4%;
    top: -9%;
    font-size: 12vw;
}

.gps-close:hover,
.gps-close:focus {
    color: #fff;
    cursor: pointer;
}

.gps-id{
    display: none;
}

.endin-space{
    
    width: 100vw;
    height: 30vh;
    position: relative;
    padding: 0;
    margin: 0;
}




footer {
    background: url('./images2/location-footer.jpg') center no-repeat ;
    background-size:cover;
    margin-top: 0;

}

.small-city-box{
    position:relative;
    top:-11%;
    background:#343436;
    border: none;
}

.small-city{
     
}

.town-middle{
 background: url(./images2/town-big.PNG) ;
    background-size:cover;
    font-family: herr ,sans-serif;
 font-size: 5rem;
    font-weight: bold;
    color:var(--sfc);
    letter-spacing: 1.3rem;
    text-align: center;
    -webkit-animation: townBack 15s infinite linear;
            animation: townBack 15s infinite linear;
    -webkit-transition: .01s;
    transition: .01s;
     
}

.all-town-pic{
    width: 100vw;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    position: relative;
    -webkit-animation: townFront 10s infinite linear;
            animation: townFront 10s infinite linear;
    -webkit-transition: .01s;
    transition: .01s;
}

.town-front1,.town-front2 , .town-front3, .town-front4{
   width:auto;
      height: 7rem;  
    -webkit-animation: town-front 10s linear infinite;  
            animation: town-front 10s linear infinite;
    position: relative;
    top:7rem;
}



.location-footer{
    position: relative;  
}

.back-to-top{
    top:-12rem;
    z-index: 100;
}


@media only screen and (min-width:900px) {
    
#location-btn {
    width: 100%;
    font-size: 5vh;
    
}
    
    .gps-discription{
    width: 90%;
    height:80% 
    }

.gps-discription .gps-map{
   padding-top: 0;
    height:90%;
    width:50%;
    float:left;
    margin: 5% auto 0 ;
}
 
    .gps-text-content ul li{
    margin: 2rem;
    font-size: 3vh;
 
}
   .gps-text-content i{
    font-size: 4vh;
    margin-right:9vh;
    float: left;
} 
    .gps-text-content{
    width: 50%;
    height: 100%;
    float:right;

}
    .gpslink {
        border: none;
    }

.gps-close{
    position: absolute;
    color:var(--sfc);
    float: right;
    right: -1%;
    top: -15%;
    font-size: 7vh;
    
    
}
    
    .endin-space{
    height: 10vh;
   
}
    
    
    .small-city-box{
        background: #363738;
    }
    .town-middle{
        background-position: bottom;
        background-size: contain;
    }
}

@-webkit-keyframes townBack {
    0%{
        background-position: 0%;
    }
   
    100%{
        background-position: 100%;  
    }
}

@keyframes townBack {
    0%{
        background-position: 0%;
    }
   
    100%{
        background-position: 100%;  
    }
}

@-webkit-keyframes town Front {
    0%{
        left: 0%;
    }
   
    100%{
        left: 100%;  
    }
}

@keyframes town Front {
    0%{
        left: 0%;
    }
   
    100%{
        left: 100%;  
    }
}
@-webkit-keyframes gpsLink{
    0%{
        color:#000;
       -webkit-transform: scale(1);
               transform: scale(1);;
    }
    50%{
        color:rgba(222, 211, 147, 0.79);
       -webkit-transform: scale(1.08);
               transform: scale(1.08);
    }
    
    100%{
         color:#000;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
}
@keyframes gpsLink{
    0%{
        color:#000;
       -webkit-transform: scale(1);
               transform: scale(1);;
    }
    50%{
        color:rgba(222, 211, 147, 0.79);
       -webkit-transform: scale(1.08);
               transform: scale(1.08);
    }
    
    100%{
         color:#000;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
}

@-webkit-keyframes popupTop{
    0%{
        top:-60vh;
        opacity: 0;
    }
    100%{
        top: 0;
        opacity: 1;
    }
}

@keyframes popupTop{
    0%{
        top:-60vh;
        opacity: 0;
    }
    100%{
        top: 0;
        opacity: 1;
    }
}
    

</style>
_END;

echo $style;

?>