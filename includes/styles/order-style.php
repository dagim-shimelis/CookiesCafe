<?php 
$style =<<<_END
<style>

@import url('./fonts.css');
@import url('./styles.css');

.hero {
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/order-hero.PNG') center no-repeat;
    background-size: cover;
}


.menu-manual {
    margin: 3rem auto;
    padding: 2rem 0;
    width: 95vw;
    display: flex;
    text-align: center;
    color: #fff;
}

.manual-icon {
    font-size: 5.9vw;
    margin: 1rem auto 2rem;
    color: var(--sfc);
}

.menu-img{
    height:15rem;
    width:23rem;
}

.manual-text p span {
    color: var(--sfc);
}

.menu-page {
    width: 100%;
    height: 90vh;
    background: url('./images2/Abract02.png') left no-repeat;
    background-size: 65%;
    margin: 5vw auto 10vw;
}

.bg-right {
    background: url('./images2/Abract01.png') right no-repeat;
    background-size: 70%;
}

.menu-page .headline {
    text-align: center;
    color: var(--sfc);
    border-bottom: 5px solid rgb(83, 45, 24);
    margin: 5vw auto 10vw;
}

.menu-posts {
    padding-top: 6rem;
}

.menu-content {
    text-align: center;
    width: 80%;
    margin: 3rem 2rem;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);

}

.main-title {
    color: #fff;
    background: rgba(83, 45, 24, 0.4);
    padding: 1rem 0;
}

.main-title h3 {
    font-size: 8vw;
}

.count {
    font-size: 6vw;
    margin: 1rem 0;
    padding: .5rem;
    display: flex;
    text-align: left;
    justify-content: space-between;
}

#counter p {
    font-size: 9vw;
    padding-left: 1rem;
}

#counter-btn {
    border: none;
    background: transparent;
    color: #c21414;
    font-size: 6vw;
}

.count,
.order-id,
.type-id {
    display: none;
}

.menu-btn {
    border: none;
    padding: 4vw 4vw;
    border-radius: 5%;
    margin: .5rem 0;
    color: firebrick;
    font-size: 4vw;
}

.menu-btn:hover {
    border: 1.4px solid firebrick;
    background: transparent;
    color: #fff;
}

.price {
    font-size: 4vw;
}

.ready-to-order {
    width: 100%;
    margin: 0 auto 1rem;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;
}

.ready-btn {
    width: 25s%;
    padding: 3vw 8vw;
    border: none;
    background: var(--sfc);
    font-family: abel;
    font-size: 7vw;
    border-radius: 150px;
    outline: none;
}

.ready-btn:hover {
    border: 2px solid var(--sfc);
    color: var(--sfc);
    background: transparent;
}

.all-form {
    display: none;

    transition: all 5s;
}

#form {
    width: 100%;
    border-top: 10px dotted var(--sfc);
}

#form .headline {
    font-size: 8vw;
    width: 90%;
    margin: 1rem auto 2rem;
    text-align: center;
}

.form-text {
    font-size: 6vw;

}

label {
    display: block;
    margin: 15px 0;
    text-transform: uppercase;
}

.all-form input[type="text"],
.all-form input[type="tel"] {
    border: none;
    border-bottom: 1px solid var(--sfc);
    background: transparent;
    outline: none;
    height: 40px;
    color: white;
    font-size: 6vw;
    cursor: context-menu;
    margin: 10px;

}

label sup {
    color: #b1b1b1;
}


.gps-btn {
    display: inline;
    padding: 5vw;
    border-radius: 50%;
    color: var(--sfc);
    border: 3px solid var(--sfc);
    background: transparent;

}

.order-textarea {
    font-size: 5vw;
    color: #b8bd6b;
}

textarea {
    max-width: 80vw;
    height: 55vw;
    font-size: 6vw;
    border: 2px solid var(--sfc);
    background: #8e8a8a;
    border-radius: 10px;
    color: #fff;
}

.form-text-box {
    display: none;
    margin: 2rem auto;
    transition: all 1s ease;
}

.all-done-box {
    display: block;
    width: 100vw;
    margin: 1rem auto 2rem;
    display: flex;
    text-align: center;
    justify-content: center;
}

.all-done-btn {
    padding: 3vw 4vw;
    border: none;
    background: var(--sfc);
    border-radius: 5px;
}

.verify {
    display: none;
}

.verify spam {
    color: var(--sfc);
}

#vID {
    font-weight: bolder;
    color: var(--sfc);
    text-decoration: underline;
}


.footer-box {
    margin-top: 5px;
    position: relative;
}

.error {
    font-size: 4vw;
    color: rgb(252, 67, 67);
    font-family: cursive;
    text-transform: lowercase;
}

.order-to-send , .order-id{
    display: none;
}





@media only screen and (max-width:900px) and (orientation: landscape)  {

     .menu-page {
   
    height: 100vh;
    background-size:45%;
    margin: 35vw auto 25vw;
}
  

    /*.sub-headline{
        font-size: 14vh;
    }
    */
    .menu-manual {
        margin: 3rem auto;
        padding: 1rem 0;
        width: 100vh;
        display: flex;
        text-align: center;
        color: #fff;
    }
   
    .manual-text p{
        font-size: 6vh;
    }
    .main-title h3 {
        font-size: 6.5vh;
    }

    .count {
        font-size:5vh;
    }

    .c-ordered {
        font-size: 4vh;

        padding-right: 70%;
    }

    #counter-btn {
        font-size: 6vh;
        outline: none;
    }

    .menu-btn {

        padding: 4vh 4vh;
        font-size: 4vh;
    }

    .price {
        font-size: 4vh;
    }
  
.ready-btn {
    margin-top: 20vw;
     padding: 1vh 8vh;
    font-size: 7vw;
    font-size: 6.5vh;
    border-radius: 150px;
}

    
    
    
    
    
    
    
    
    


    #form .headline {
        font-size: 9vh;
        width: 90%;
        margin: 1rem auto 2rem;
        text-align: center;
    }

    .form-text {
        font-size: 6vh;
    }

    .all-form input[type="text"],
    .all-form input[type="tel"] {
        font-size: 6vh;
    }

    .gps-btn {

        padding: 20px;
    }

    .order-textarea {
        font-size: 5vh;
    }

    textarea {
        max-height: 80vh;
        max-width: 70vh;
        font-size: 6vh;
    }

    #form {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .form-input-area,
    .form-output-area {
        width: 40%;
        display: inline;
    }

    .all-done-btn {
        padding:3vh 4vh;
        
    }

    .verify {
        width: 120vh;
    }

    .error {
        font-size: 4vh;
    }


.verify p{
    font-size: 5vh;
    
}
}






@media screen and (min-width:900px) and (orientation: landscape) {
   

    .menu-manual {
        margin: 3rem auto;
        padding: 1rem 0;
        width: 70vh;
        display: flex;
        text-align: center;
        color: #fff;
    }

    .main-title h3 {
        font-size: 4.5vh;
    }

    .count {
        font-size: 2.5vh;
    }

    .c-ordered {
        font-size: 2vh;

        padding-right: 60%;
    }

    #counter-btn {
        font-size: 3vh;
        outline: none;
    }

    .menu-btn {

        padding: 2vh 2vh;
        font-size: 2vh;
    }

    .price {
        font-size: 2vh;
    }

    .ready-btn {
        padding: 1vh 4vh;
        border: none;
        background: var(--sfc);
        font-family: abel;
        font-size: 3.5vh;
        border-radius: 150px;
    }

    #form .headline {
        font-size: 4vh;
        width: 90%;
        margin: 1rem auto 2rem;
        text-align: center;
    }

    .form-text {
        font-size: 3vh;
    }

    .all-form input[type="text"],
    .all-form input[type="tel"] {
        font-size: 3vh;
    }

    .gps-btn {

        padding: 20px;


    }

    .order-textarea {
        font-size: 2.5vh;
    }

    textarea {
        height: 40vh;
        width: 35vh;
        font-size: 3vh;
    }

    #form {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .form-input-area,
    .form-output-area {
        width: 40%;
        display: inline;
    }

    .all-done-btn {
        padding: 1.5vh 2vh;
        border: none;
        background: var(--sfc);
        border-radius: 5px;
    }

    .verify {
        width: 60vh;
    }

    .error {
        font-size: 2vh;
    }



}

@media only screen and (max-aspect-ratio:1/1) and (min-aspect-ratio:7/10){
 
    .main-title h3 {
        font-size: 2.5vh;
    }
    
     .count {
        font-size: 2vh;
    }
    #counter-btn {
        font-size: 2vh;
    }

    .menu-btn {

        padding: 1vh 1vh;
        font-size: 1.5vh;
    }

    .price {
        font-size: 1.6vh;
    }
    
    .menu-page .headline{
        font-size: 5vh;
    }
    
    .ready-btn {
        width: 35%;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        justify-content: center;
    padding: 1vw 4vw;
   font-size: 4vw;
  
}
    #form .headline {
    font-size: 6vw;
    }

.form-text {
    font-size: 4vw;

}



.all-form input[type="text"],
.all-form input[type="tel"] {
    
    font-size: 4vw;
    margin: 30px;

}
    textarea {
   
    font-size: 4vw;
    }
    
    .all-done-btn {
        padding: 3.5vh 4vh;
    font-size: 3vw;
    }
    
    
    
    
    
    
}

</style>
_END;

echo $style;

?>