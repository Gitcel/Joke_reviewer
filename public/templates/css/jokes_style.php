<?php header('Content-type: text/css; charset: UTF-8'); ?>

:root {

    --bodyCol: rgba(40, 40, 40, 1);
    
    --navbarMainATextCol: rgba(255, 255, 255, 1);
    --navBarBackground: rgba(200, 0, 0, 1);

    --user-InputCol: rgba(255, 0, 50, 1);
    --email-InputCol: rgba(255, 100, 100, 1);
    --password-InputCol: rgba(255, 150, 150, 1);
    --aboutMainPTextCol: rgb(255, 40, 0);
    --punchlineTextCol: rgb(240, 120, 80);
    
    --rateButtonHoverTextCol: 0 0 6px rgba(255, 160, 100, 0.8);
    --rateButtonHoverBordCol: rgba(255, 160, 100, 1);
    
    --inputBackgroundCol: linear-gradient(

        0deg,
        rgb(90, 90, 90),
        rgb(10, 10, 10),
        rgb(10, 10, 10),
        rgb(90, 90, 90)

    );

    --title-textShadow: 4px 4px 2px rgba(100, 20, 20, 0.9);
    --indexButton-textShadow: 2px 2px 0 rgba(20, 20, 20, 0.8);
    --indexButton-boxShadow: 4px 4px 0 rgba(20, 20, 20, 0.8);
    --indexButton-background: linear-gradient(

        360deg,
        rgb(0, 0, 200),
        rgb(0, 20, 250),
        rgb(0, 40, 250),
        rgb(0, 20, 250),
        rgb(0, 0, 200)

    );

    --indexButtonHover-background: linear-gradient(

        360deg,
        rgb(0, 10, 200),
        rgb(0, 40, 250),
        rgb(0, 80, 255),
        rgb(0, 40, 250),
        rgb(0, 10, 200)

    );

    --indexButtonHover-textShadow: 0 0 1px rgba(200, 200, 200, 0.8), 0 0 4px rgba(200, 200, 200, 0.6);
    --indexButtonHover-boxShadow: 0 0 15px rgba(0, 0, 200, 1);
    --aboutMainTextShadow: 4px 4px 2px rgba(80, 20, 20, 1);
    --navbarMainATextShadow: 2px 2px 0 rgba(20, 20, 20, 0.8);

    --fontFamilyPrimary: 'Gloria Hallelujah', cursive;
    --fontFamilySecondary: 'Gloria Hallelujah';

    --user-InputCol: rgba(255, 0, 50, 1);
    --email-InputCol: rgba(255, 100, 100, 1);
    --password-InputCol: rgba(255, 150, 150, 1);
    --inputBackgroundCol: linear-gradient(

        0deg,
        rgb(90, 90, 90),
        rgb(10, 10, 10),
        rgb(10, 10, 10),
        rgb(90, 90, 90)

    );
        
    --title-textShadow: 4px 4px 2px rgba(100, 20, 20, 0.9);
    --indexButton-textShadow: 2px 2px 0 rgba(20, 20, 20, 0.8);
    --indexButton-boxShadow: 4px 4px 0 rgba(20, 20, 20, 0.8);
    --indexButton-background: linear-gradient(

        360deg,
        rgb(0, 0, 200),
        rgb(0, 20, 250),
        rgb(0, 40, 250),
        rgb(0, 20, 250),
        rgb(0, 0, 200)

    );

    --indexButtonHover-background: linear-gradient(

        360deg,
        rgb(0, 10, 200),
        rgb(0, 40, 250),
        rgb(0, 80, 255),
        rgb(0, 40, 250),
        rgb(0, 10, 200)

    );

    --indexButtonHover-textShadow: 0 0 1px rgba(200, 200, 200, 0.8), 0 0 4px rgba(200, 200, 200, 0.6);
    --indexButtonHover-boxShadow: 0 0 15px rgba(0, 0, 200, 1);

    --haha1: hahaShow1 4s 2s linear infinite;
    --haha2: hahaShow2 4s 4s linear infinite;
    --haha3: hahaShow3 4s 3s linear infinite;
    --haha4: hahaShow4 4s 5s linear infinite;

    --hahaShow1-transform: translate(-650px, 200px) rotate(20deg);
    --hahaShow2-transform: translate(-640px, 70px) rotate(30deg);
    --hahaShow3-transform: translate(400px, 200px) rotate(-20deg);
    --hahaShow4-transform: translate(340px, 360px) rotate(-30deg);

}

body {

    background: var(--bodyCol);

}

.container {

    font-size: 40px;

}

#form-index-id {

    text-align: center;

}

.label-index-class {

    text-align: center;

}

.navbar-main {

    top: 0;
    width: 1280px;
    height: 60px;
    font-family: var(--fontFamilyPrimary);
    box-shadow: 0 10px 2px rgba(20, 20, 20, 0.4);
    background: var(--navBarBackground);
    overflow: hidden;
    z-index: 1;

}

.navbar-main a {

    margin: 0 0 0 0;
    float: left;
    -moz-float: left;
    text-align: center;
    padding: 4px 2em;
    text-decoration: none;
    font-size: 30px;
    color: var(--navbarMainATextCol);
    text-shadow: var(--navbarMainATextShadow);
    border-radius: 10px;
    transition: background-color 0.2s, text-shadow 0.4s;

}

.navbar-main a:nth-child(5) {

    margin: 0 0 0 60px;
    padding: 4px 1em;

}

.navbar-main a:hover {

    color: var(--navBarBackground);
    background: var(--navbarMainATextCol);
    border-radius: 100%;

}

.container-jokes {

    position: relative;
    top: 120px;

}

#joke-id {

    text-align: center;
    color: var(--aboutMainPTextCol);
    font-size: 60px;
    font-family: var(--fontFamilyPrimary);
    text-shadow: var(--aboutMainTextShadow);

}

#punchline-id {

    text-align: center;
    color: var(--punchlineTextCol);
    font-size: 50px;
    font-family: var(--fontFamilyPrimary);

}

.container-ratings {

    margin-top: 150px;

}

.container-rate {

    padding: 10px 0 0 0;
    font-family: var(--fontFamilyPrimary);
    font-size: 60px;
    text-align: center;
    color: rgb(20, 20, 20);
    text-shadow: 2px 2px 0 rgba(20, 20, 20, 0.4);

}

.rate-1 {

    width: 80px;
    text-align: center;
    color: orange;
    background-color: var(--bodyCol);

}

.rate-2 {

    margin-left: -20px;
    text-align: center;
    color: orange;

}

.container-rate-button {

    margin-top: 40px;
    padding: 50px 0 100px 0;

}

.rate-button {

    width: 200px;
    height: 100px;
    font-size: 30px;
    color: orange;
    background-color: var(--bodyCol);
    border-style: dashed;
    border-width: 6px;
    border-color: orange;
    text-align: center;
    transition: 0.1s ease-in-out;

}

.rate-button:hover {

    cursor: pointer;
    text-shadow: var(--rateButtonHoverTextCol);
    box-shadow: var(--rateButtonHoverTextCol);
    border-color: var(--rateButtonHoverBordCol);

}

.title-rating {

    padding: 100px 0 0 0;
    font-family: var(--fontFamilyPrimary);
    font-size: 40px;            
    text-align: center;
    color: orange;
    text-shadow: none;

}

.about-main {

    position: relative;
    text-align: center;
    top: 100px;
    left: 0;
    z-index: 1;
    text-shadow: var(--aboutMainTextShadow);

}

.about-main p {

    font-size: 50px;
    padding: 0 6em 2em 6em;
    font-family: var(--fontFamilySecondary);
    color: var(--aboutMainPTextCol);

}

.error-create-account-class {

    position: absolute;
    top: 500px;
    left: 450px;
    font-size: 20px;
    font-family: var(--fontFamilySecondary);
    color: red;
    text-align: center;

}

.ratings-list-items {

    padding: 0 0 0 2em;
    font-size: 30px;
    font-family: var(--fontFamilyPrimary);
    color: var(--rateButtonHoverBordCol);
    text-shadow: var(--aboutMainTextShadow);

}

.ratings-list-count {

    margin: 0 -3.5em 0 0;
    padding: 1em 0 1em 1em;
    font-size: 30px;
    font-family: var(--fontFamilyPrimary);
    color: var(--rateButtonHoverBordCol);
    text-shadow: var(--aboutMainTextShadow);

}

.container-ratings {

    position: absolute;
    left: 150px;            
    color: white;
    list-style: none;
    z-index: 2;

}

.container-ratings-title {

    position: relative;
    top: 120px;
    left: 400px;
    text-align: center;
    font-size: 60px;
    font-family: var(--fontFamilyPrimary);
    color: orange;
    text-shadow: var(--aboutMainTextShadow);
    box-shadow: 0 0 8px rgba(255, 160, 100, 0.6);
    border: dashed orange;
    height: 120px;
    width: 400px;
    
}

.container-main {

    position: relative;
    top: -30px;

}

.title-class {

    position: absolute;
    left: 250px;
    top: -100px;
    text-align: center;
    font-size: 90px;
    font-family: 'Gloria Hallelujah', cursive;
    color: white;
    text-shadow: var(--title-textShadow);
    
}

.create-account-class {

    position: absolute;
    left: 370px;
    top: -30px;
    text-align: center;
    font-size: 50px;
    font-family: 'Gloria Hallelujah', cursive;
    color: white;
    text-shadow: var(--title-textShadow);

}

#form-index-id {

    position: relative;
    top: 0;
    font-size: 30px;

}

.form-group {

    margin-top: -20px;

}

.form-group label {

    font-size: 30px;

}

[for="text"] {

    color: var(--user-InputCol);

}

[for="email"] {

    color: var(--email-InputCol);
    
}

[for="Password"] {

    color: var(--password-InputCol);
    
}

#form-index-id {

    margin: 200px 0 0 400px;
    text-align: center;
    font-family: 'Gloria Hallelujah', cursive;

}

.form-group {

    width: 400px;

}

.form-control {

    background: var(--inputBackgroundCol);

}

#username-id {

    color: var(--user-InputCol);

}

#email-id {

    color: var(--email-InputCol);

}

#password-id {

    color: var(--password-InputCol);

}

input {

    text-align: center;

}

.label-index-class {

    text-align: center;
    font-family: 'Gloria Hallelujah', cursive;
    padding: 2em 0 0 0;

}

#index-button-id {

    width: 140px;
    height: 100px;
    margin: 50px 480px 0 0;
    border-radius: 50%;
    font-size: 30px;
    font-family: 'Gloria Hallelujah', cursive;
    line-height: 30px;
    color: rgba(255, 255, 255, 1);
    text-shadow: var(--indexButton-textShadow);
    box-shadow: var(--indexButton-boxShadow);
    background: var(--indexButton-background);

}

#index-button-id:hover {

    background: var(--indexButtonHover-background);
    text-shadow: var(--indexButtonHover-textShadow);
    box-shadow: var(--indexButtonHover-boxShadow);

}