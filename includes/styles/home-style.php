<?php 
$style =<<<_END
<style>
@import url('./fonts.css');

/*Global styles*/
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
/*
'Source Sans Pro'
 'Herr Von Muellerhoff', 
 'Cabin',*/
:root {
    --mf: abel, sans-serif;
    --sf: Herr, abel, serif;
    --bf: abel, serif;
    --mfcd: #252525;
    --sfc: #d1b415;
    --bfc: #fff;
}

html {
    font-family: var(--bf);
    font-size: 3vw;
    color: var(--bfc);
    overflow-x: hidden;
    scroll-behavior: smooth;
}

body {
  background-image: linear-gradient(to top, #434343 0%, #02050c 100%);
  width: 100vw;
  overflow-x: hidden;
  color: #fff;
}


#loading {
    width: 100%;
    height: 100vh;
    background-color:var(--bfc);
    position: fixed;
    display: -webkit-box;
    display: -ms-flexbox;
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 10000;
    overflow: hidden;
    -webkit-animation: animeload 3s linear infinite;
    animation: animeload 3s linear infinite;

}

#loading.nosee {
    display: none;
}

.loading-icons {
   position: absolute;
    top: 50vh;
    left: 50vw;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
    animation: animeiconsfinishphone 5s linear;
    animation-delay: 10s;
}

.loading-icons span {
    position: absolute;
    display: block;
    height: 50px;
    width: 40px;
    border-radius: 50%;
    -webkit-animation: animeicons 2s linear 5;
    animation: animeicons 2s linear 5;
}

.loading-icons .fas {
    font-size:4rem;
    color: #d1b415;
}


span:nth-child(2) {

    -webkit-animation-delay: -1s;

    animation-delay: -1s;
}

span:nth-child(3) {

    -webkit-animation-delay: -0.5s;

    animation-delay: -0.5s;
}

span:nth-child(4) {

    -webkit-animation-delay: -1.5s;

    animation-delay: -1.5s;
}



#loading p {
    color: #fff;
    text-transform: capitalize;
    margin-top: 65vw;
    font-size: 7vw;
}

#everything {
    display:block;
}

#everything.see {
    display: block;
}



section {
    padding: 3.9rem 0;
}

img {
    width: 100%;
    max-width: 100%;
}

a {
    text-decoration: none;
    color: black;
}

.btn:hover{
    cursor: pointer;
}

p {
    font-size: 5vw;
    text-align: justify;
}

.container {
    width: 100%;
    max-width: 122.5rem;
    margin: 0 auto;
    padding: 0 6vw;
}

/*----header-----*/

header {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(transparent));
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent);
}

.logo {
    color: var(--sfc);
    font-size: 4rem;
    text-align: center;
}

.nav {
    height: 7.2rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.menu-toggle {
    color: #fff;
    font-size: 2.2rem;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 2.5rem;
    cursor: pointer;
    z-index: 2500;
}

.nav .fa-times {
    visibility: hidden;
}

.nav-list {
    list-style: none;
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    width: 80%;
    height: 100vh;
    background-color: var(--mfcd);
    padding: 4.4rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    z-index: 2250;
    clip-Path: circle(0px at 100% 50%);
    -webkit-transition: -webkit-clip-path 1.5s ease-in-out;
    transition: -webkit-clip-path 1.5s ease-in-out;
    transition: clip-path 1.5s ease-in-out;
    transition: clip-path 1.5s ease-in-out, -webkit-clip-path 1.5s ease-in-out;
    -webkit-animation: animeclose 1s ease-out;
    animation: animeclose 1s ease-out;


}

.open .menu-toggle {
    position: fixed;
    top: 4%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 6.5rem;
    cursor: pointer;
    z-index: 2500;
}

.open .fa-times {
    position: fixed;
    visibility: visible;
}

.open .fa-bars {
    display: none;
}

.open .nav-list {
    -webkit-animation: animeopen 1s ease-in;
    animation: animeopen 1s ease-in;
    clip-Path: none;
}

.nav-item {
    border-bottom: 2px solid #808080;
}

.nav-link {
    display: block;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.6rem;
    font-family: var(--bf);
    letter-spacing: 3px;
    margin-right: .3px;
    -webkit-transition: color .6s;
    transition: color .6s;

}

.nav-link:hover,
.nav-link:focus {
    color: var(--sfc);
}

#active {
    color: var(--sfc);
}

.brand {
    color: var(--sfc);
    font-size: 1rem;
    text-align: center;
}

/*--------hero-----*/

#hero-background {
    background-color: var(--mfcd);
}

.hero {
    width: 100%;
    height: 100vh;
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/hero2-home.jpg') center no-repeat;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    
}

.sub-headline {
     visibility: none;
    font-size: 18vw;
    font-family: herr;
    color: var(--sfc);
    font-weight: 100;
    line-height: .8;
    letter-spacing: 6px;
    opacity: 0;
    -webkit-animation: fadeup 6.5s ease-in;
    animation: 6500ms ease 0s 1 normal forwards running fadeup;
    -webkit-animation-delay: .8s;
    animation-delay: 1637.5286041189931ms;
}

.first-letter {
     visibility: none;
    text-transform: uppercase;
    font-size: 11.33rem;
}

.headline {
    visibility: none;
    color: #fff;
    font-size: 3.7rem;
    font-family: var(--mf);
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: .5rem;
    margin-right: .5rem;
    opacity: 1;
    animation: fadein 5s ease-in-out;
    animation-delay:;
}


.separator {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background:;
    animation: spin 3.5s ease-in-out;
}

.line {
    width: 100%;
    max-width: 20.4rem;
    height: .25rem;
    background-color: #fff;
    position: relative;
    opacity: 0;
    -webkit-animation: grow 2s forwards;
    animation: grow 2s forwards;
    -webkit-animation-delay: .8s;
    animation-delay: 1s;
}

.line-right::before,
.line-left::before {
    content: '';
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    border: 0.9rem solid transparent;
}

.line-right::before {
    border-right-color: #fff;
    right: 1px;
}

.line-left::before {
    border-left-color: #fff;
    left: 1px;
}

.cookie {
    font-size: 2rem;
    color: var(--sfc);
    margin: 0 1.6rem;
    opacity: 0;
    -webkit-animation: spin 15s forwards;
    animation: 5000ms ease 0s 1 normal forwards running spin;
    -webkit-animation-delay: .9s;
    animation-delay: 288.604118993135ms;
}

.headline-description h5 {
    position: absolute;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
    transform: translateX(-50%, 0);
    width: 50%;
    max-height: 27rem;
    color: #fff;
    font-size: 5vw;
    font-family: var(--bf);
    font-weight: 100;
    text-transform: uppercase;
    margin-top: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
    opacity: 0;
    -webkit-animation: fadedown 2s forwards;
    animation: fadedown 2s forwards;
    -webkit-animation-delay: 1.2s;
    animation-delay: 1.2s;
}

 #newline {
        color: var(--sfc);
     font-size: 5vw;
    
    }

.btn {
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: -2px;
}

/*-----------*/

.global-headline {
    text-align: center;
    margin-top: 3.9rem;
}

.discover-our-story .global-headline {
    margin-top: 6.9rem;
}

.global-headline .cookie {
    margin: 2.4rem 0;
}

.dark {
    color: var(--mfcd);
    letter-spacing: 0.7rem;
    margin-right: -0.4rem;
}

.restaurant-info {
    text-align: center;
}

.restaurant-description {
    margin-bottom: 3rem;
}

.restaurant-description p {
    line-height: 1.6;
    margin-bottom: 2.4rem;
}

.body-btn {
    font-size: 1.5rem;
    color: var(--sfc);
    position: relative;
    -webkit-transition: color .5s;
    transition: color .5s;
    border-bottom: 2px solid var(--sfc);
}


/*------teastful recipes----*/

.tastful-recipes {
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/te.jpg') bottom no-repeat;
    background-size: cover;
}

.between {
    height: 60vh;
    min-height: 55vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.between h1{
   text-shadow: 2px 2px  0 black;
}


/*---xx---teastful recipes--xx--*/

/*----discover-our- menu---*/

.image-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.5rem;
}

.discover-our-menu .restaurant-description {
    padding-top: 3rem;
    margin-bottom: 0;
}

/*--xx--discover-our- menu--xx-*/

.perfect-blend {
     background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/the-perfect-blend.jpg') center no-repeat;
    background-size: cover;
}


#light {
     background: rgba(0, 0, 0, 0.76);
    
}
#heroGradi {
    background: linear-gradient(to top, #09203f 0%, #537895 100%);
}

footer {
    background: url('./images2/home-footer.jpg');
    background-size: contain;
    color: #fff;
    text-align: center;
    position: relative;
    margin-top: 4rem;
}
.footer-box{
     padding: 3.9rem 0;
}
.back-to-top {
    width: 5rem;
    height: 5rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    text-align: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #d3d3d3 transparent top bottom 30 70;
    position: absolute;

    top: -4rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    border: 0.5vw solid #d1b415;
    border-bottom: none;
    border-radius: 50%;
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius: 1rem;

}

.back-to-top i {


    color: #d1b415;
    font-size: 2rem;
    -webkit-animation: up 2s infinite;
    animation: 2000ms ease 1013.41ms infinite normal none running up;

}

.footer-content {
    overflow: hidden;
    margin-bottom: 10rem;
}

.footer-content h4 {
    font-size: 8vw;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    margin-bottom: 3rem;
}

.footer-content .cookie {
    margin: 2.4rem 0;
}

.footer-content-about {
    margin-bottom: 5.4rem;
}

.footer-content-about p {
    line-height: 2;
    text-align: center;
}

.social-icon {
    list-style-type: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 5.4rem;
}

.social-icon i {
    font-size: 2rem;
    color: #fff;
    padding: .8rem 2rem;
    opacity: .5;
    -webkit-transition: color .5s;
    transition: color .5s;
}

.social-icon i:hover,
.social-icon i:focus {
    opacity: 1;
    color: var(--sfc);
}

.newsletter-form {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
}

.newsletter-input {
    background-color: #fff;
    width: 100%;
    max-width: 25rem;
    padding: 1.6rem;
    border-radius: .4rem;
}

.newsletter-btn {
    background-color: transparent;
    border: none;
    -webkit-column-count: var(--mfcd);
    column-count: var(--mfcd);
    cursor: pointer;
    font-size: 1.6rem;
    padding: 1px .6rem;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    margin-left: 10.5rem;

}

#copy-right {
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
    margin: 6rem 0 0 0;
    padding: 20px;
    background-color: rgba(209, 180, 21, 0.3);
}

#copy-right h4 {
    font-family: abel;
    font-size: 1.3rem;
    letter-spacing: .2rem;
    width: 20rem;
    margin: 0 auto;
    text-transform: uppercase;
}



@media only screen and (orientation: landscape){
    html {
        font-size: 2vh;

    }
    .nav-link {
        font-size: 1.8vw;
        
    }
    .headline-description h5 {
        font-size: 3.2vh;
    }
        .nav-list {
            
        width: 40%;
    }

    p {
        font-size: 3.2vh;
    }
    
     
    .footer-content h4 {
        font-size: 3.5vh;
    }
     .restaurant-info {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }


    .restaurant-info > div {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .padding-right {
        padding-right: 7rem;
    }
   .padding-left {
        padding-left: 7rem;
    }
     .footer-content {
        max-width: 87.5rem;
        margin: auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer-content-about {
        max-width: 51.3rem;

    }

    .footer-content-divider {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;

    }

    .social-media,
    .newsletter-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 2rem 1rem;
    }
    .newsletter-form {
        margin-bottom: 5rem;
    }
    .social-icon {
        opacity: 1;
    }


    .newsletter-btn {
        margin-left: 7.5rem;
    }
@media only screen and (max-aspect-ratio:1/1) and (min-aspect-ratio:7/10){
   
    .restaurant-info{
        display:block;
    }
  .padding-right {
        padding-right: 0;
    }
    .padding-left {
        padding-left: 0;
    }
.footer-content {
        display:block;
    }

    .footer-content-about {
        display: block;
        margin: auto;
        width: 100%;

    }

    .footer-content-divider {
        display:block;

    }
   .newsletter-input {
        font-size: 4vw;
    }

}

}




@media screen and (min-width:900px) {

  
  
    
    html {
        font-size: 2vh;
    }
    body{
        display:block;
        background-color: #3d3e3e;
    }

    #loading p {
        font-size: 7vh;
        margin-top: 35vh;
    }

    .loading-icons .fas{
        font-size: 7vh;
    }



    .nav-link {
        font-size: 1.8vw;
    }

    p {
        font-size: 3.2vh;
    }

    .container {
        padding: 0 6.5vh;
    }

    .sub-headline {
        font-size: 10vh;
    }

    .first-letter {
        font-size: 15vh;
    }


    .sub-headline-big {
        font-size: 14vh;
    }

    .first-letter-big {
        font-size: 22vh;
    }

    .headline {
        font-size: 6.3vh;
        letter-spacing: .8rem;
    }

    .headline-description h5 {
        font-size: 2.2vh;
    }

    #newline {
        display: block;
        font-size: 3vh;
    }

    .footer-content h4 {
        font-size: 3.5vh;
    }















    sectiion {
        padding: 7.9rem;
    }

    #active {
        color: #fff;
        border: 2px solid var(--sfc);
        border-bottom: none;
        padding: .5rem;
        border-radius: 3rem;
    }

    .menu-toggle {
        display: none;
    }

    .nav {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .nav-item-brand {
        display: none;
    }

    .nav-list {
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        padding: 0;
        -webkit-box-pack: initial;
        -ms-flex-pack: initial;
        justify-content: initial;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-transform: initial;
        transform: initial;
        -webkit-transition: initial;
        transition: initial;
        -webkit-clip-path: none;
        clip-path: none;
    }

    .nav-item {
        margin: 0 2rem;
        border: none;
    }

    .nav-item:last-child {
        margin-right: 0;
    }







    .line {
        max-width: 11.4rem;
    }

    .restaurant-info {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }


    .restaurant-info > div {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .padding-right {
        padding-right: 7rem;
    }
   .padding-left {
        padding-left: 7rem;
    }
    .footer-content {
        max-width: 87.5rem;
        margin: auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .footer-content-about {
        max-width: 51.3rem;

    }

    .footer-content-divider {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;

    }

    .social-media,
    .newsletter-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 1rem 1rem;
    }

    .social-icon {
        opacity: 1;
    }


    .newsletter-btn {
        margin-left: 7.5rem;
    }

    
    
.loading-icons {
    animation: animeiconsfinishpc 5s linear;
    animation-delay: 10s;
}
  
    @media only screen and (max-aspect-ratio:1/1) and (min-aspect-ratio:7/10){
   
    .restaurant-info{
        display:block;
    }
  .padding-right {
        padding-right: 0;
    }
        .padding-left {
        padding-left: 0;
    }
.footer-content {
        display:block;
    }

    .footer-content-about {
        display: block;
        margin: auto;
        width: 100%;

    }

    .footer-content-divider {
       display:block;

    }
   .newsletter-input {
        font-size: 4vw;
    }

}
    
}





 




@-webkit-keyframes fadeup {
    0% {
        -webkit-transform: translatey(5rem);
        transform: translatey(5rem);
    }

    100% {
        opacity: 1;
        -webkit-transform: translatey(0);
        transform: translatey(0);
    }
}




@keyframes fadeup {
    0% {
        -webkit-transform: translatey(5rem);
        transform: translatey(5rem);
    }

    10% {
        opacity: 1;
        -webkit-transform: translatey(-10rem);
        transform: translatey(-10rem);
    }
    20% {
        opacity: 1;
        -webkit-transform: translatey(0rem);
        transform: translatey(0rem);
    }
    
    30% {
        opacity: 1;
        -webkit-transform: translatey(-2.53rem);
        transform: translatey(-2.53rem);
    }
    
    35% {
        opacity: 1;
        -webkit-transform: translatey(0rem);
        transform: translatey(0rem);
    }
    
    45% {
        opacity: 1;
        -webkit-transform: translatey(-1rem);
        transform: translatey(-1rem);
    }
    
    50% {
        opacity: 1;
        -webkit-transform: translatey(0rem);
        transform: translatey(0rem);
    }
    
    100% {
        opacity: 1;
        -webkit-transform: translatey(0rem);
        transform: translatey(0rem);
    }
}

@-webkit-keyframes fadedown {
    0% {
        -webkit-transform: translatey(-0.5rem);
        transform: translatey(-0.5rem);
    }

    100% {
        opacity: 1;
        -webkit-transform: translatey(0);
        transform: translatey(0);
    }
}

@keyframes fadedown {
    0% {
        -webkit-transform: translate(-50%, -5rem);
        transform: translate(-50%, -5rem);
    }

    100% {
        opacity: 1;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
    }
}

@keyframes fadein {
    0% {
        opacity: 0;
        -webkit-transform:scale(0);
        transform: scale(0);
    }
    40% {
        opacity: 1;
        -webkit-transform:scale(0);
        transform: scale(0);
    }
    

    70% {
        opacity: 1;
        -webkit-transform:scale(1.1);
        transform: scale(1.03);
    }

    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform:scale(1);
    }
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);

    }

    100% {
        opacity: 1;
        -webkit-transform: rotate(-360deg);
        transform: rotate(-360deg);
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);

    }
    30% {
        opacity: 1;
       -webkit-transform: rotate(-360deg);
        transform: rotate(-360deg);
    }
    90% {
        opacity: 1;
        -webkit-transform: rotate(0);
        transform: rotate(0); 
        }

    100% {
        opacity: 1;
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }
}

@-webkit-keyframes grow {
    0% {
        width: 0;
    }

    100% {
        opacity: 1;
        width: 100%
    }
}

@keyframes grow {
    0% {
        width: 0;
    }

    100% {
        opacity: 1;
        width: 100%
    }

}

@keyframes up {
    0% {
        opacity: 0;
        transform: translateY(1rem);
    }
   100% {
        opacity: 1;
           transform: translateY(-1rem);
    }

}


@-webkit-keyframes dscale {
    0% {
        opacity: 0;
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}


@keyframes dscale {
    0% {
        opacity: 0;
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}


@keyframesxxxxxxx animeiconsfinishphone {
    0% {
        top: 50vh;
        left 50vw;
    }

    20% {
       top: 13vh;
       left: 62.9vw;
    }

    100% {
       top: 13vh;
       left: 62.9vw;
    }
}
   
@keyframes xxxxanimeiconsfinishphonelandscape{
       0% {
        top: 50vh;
        left 50vw;
    }

    20% {
        top: 19vh;
    left: 55vw;
    }

    100% {
       top: 19vh;
    left: 55vw;
    }
}
@keyframes xxxxanimeiconsfinishpc {
       0% {
        top: 50vh;
        left 50vw;
    }

    20% {
       top: 12vh;
    left: 11vw;
    }

    100% {
       top: 12vh;
    left: 11vw;
    }
}


@-webkit-keyframes anime {
    0% {
        clip-Path: circle(0px at 100% 50%);
    }

    100% {
        clip-Path: circle(100vw at 90% 50%);
    }
}

@-webkit-keyframes animeopen {
    0% {
        clip-Path: circle(0px at 100% 50%);
    }

    100% {
        clip-Path: circle(100vw at 90% 50%);
    }
}

@keyframes animeopen {
    0% {
        clip-Path: circle(0px at 100% 50%);
    }

    100% {
        clip-Path: circle(100vw at 90% 50%);
    }
}

@-webkit-keyframes animeclose {
    0% {
        clip-Path: circle(100vw at 90% 50%);
    }

    100% {
        clip-Path: circle(0px at 100% 50%);
    }
}

@keyframes animeclose {
    0% {
        clip-Path: circle(100vw at 90% 50%);
    }

    100% {
        clip-Path: circle(0px at 100% 50%);
    }
}


@keyframes animeicons {
    0% {
        top: 0;
        left: 0;
    }

    5% {
        top: 0;
        left: 0;
    }

    25% {
        top: 0;
        left: 50%;
    }

    30% {
        top: 0;
        left: 50%;
    }

    50% {
        top: 50%;
        left: 50%;
    }

    55% {
        top: 50%;
        left: 50%;
    }

    75% {
        top: 50%;
        left: 0;
    }

    80% {
        top: 50%;
        left: 0;
    }

    100% {
        top: 0;
        left: 0;
    }


}





</style>
_END;

echo $style;

?>