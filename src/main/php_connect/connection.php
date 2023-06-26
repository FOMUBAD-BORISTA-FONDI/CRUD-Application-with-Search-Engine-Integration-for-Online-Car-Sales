/* Custom Properties */

/* =====================Par 2--------------------------- */

:root {
  /* color */
  --clr-gray: 0 0% 86.3%;
  --clr-gray-light: 0 0% 93.3%;
  --clr-red: 356.7 90.1% 56.5%;
  --clr-black: 0 0% 21.2%;
  --clr-yellow: 43.8 99% 58.8%;
  --clr-very-light-gray: 300 2.7% 92.7%;
  --clr-green: 144.3 64.4% 49.6%;
  --clr-blue: 214.5 100% 53.9%;
  --clr-white: 0 0% 100%;

  /* font-size */
  /* --fs-bf-194: 12.125rem; */
  --fs-bf-194: 12.3vw;
  --fs-bf-109: 6.8125rem;
  --fs-bf-65: 4.065rem;
  --fs-bf-80: 5rem;
  --fs-bf-50: 3.125rem;
  --fs-bf-45: 2.8125rem;
  --fs-bf-30: 1.875rem;
  --fs-bf-20: 1.25rem;
  --fs-bf-16: 1rem;
  --fs-bf-15: 0.9375rem;

  /* font family */
  --font-montserrat: "Montserrat", sans-serif;
  --font-poppins: "Poppins", sans-serif;
}

/* =====================Par 2--------------------------- */

@media (max-width: 35em){
  :root{
    --fs-bf-194: 12.3vw;
  --fs-bf-109: 6.8125rem;
  --fs-bf-65: 4.065rem;
  --fs-bf-80: 5rem;
  --fs-bf-50: 3.125rem;
  --fs-bf-45: 2.8125rem;
  --fs-bf-30: 1.875rem;
  --fs-bf-20: 1rem;
  --fs-bf-16: 0.8rem;
  --fs-bf-15: 0.8rem;

  }
}
@media (min-width: 35em) and (max-width: 59em){
  :root{
    --fs-bf-194: 12.3vw;
  --fs-bf-109: 6.8125rem;
  --fs-bf-65: 4.065rem;
  --fs-bf-80: 5rem;
  --fs-bf-50: 3.125rem;
  --fs-bf-45: 2.8125rem;
  --fs-bf-30: 2.55rem;
  --fs-bf-20: 1.25rem;
  --fs-bf-16: 1rem;
  --fs-bf-15: 0.8375rem;

  }
}

@media (min-width: 59em){
  :root{
    --fs-bf-194: 12.3vw;
  --fs-bf-109: 6.8125rem;
  --fs-bf-65: 4.065rem;
  --fs-bf-80: 5rem;
  --fs-bf-50: 3.125rem;
  --fs-bf-45: 2.8125rem;
  --fs-bf-30: 1.875rem;
  --fs-bf-20: 2rem;
  --fs-bf-16: 1rem;
  --fs-bf-15: 0.9375rem;

  }
}

/* ====================Part 1----------------------------------------------- */

/* End Custom Properties */

/* Box sizing rules */
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* Remove default margin */
body,
h1,
h2,
h3,
h4,
p,
figure,
blockquote,
dl,
dd {
  margin: 0;
}

/* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
ul[role="list"],
ol[role="list"] {
  list-style: none;
}

/* Set core root defaults */
html:focus-within {
  scroll-behavior: smooth;
}

/* Set core body defaults */
body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.5;
}

/* A elements that don't have a class get default styles */
a:not([class]) {
  text-decoration-skip-ink: auto;
}

/* Make images easier to work with */
img,
picture {
  max-width: 100%;
  display: block;
}

/* Inherit fonts for inputs and buttons */
input,
button,
textarea,
select {
  font: inherit;
}

::-webkit-scrollbar {
  display: none;
}

/* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
@media (prefers-reduced-motion: reduce) {
  html:focus-within {
    scroll-behavior: auto;
  }

  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}

/* ====================End Part 1----------------------------------------------- */


/* ===========Utility Class=================== */

/* Generall Utiltiy Class */

body{
  overflow-x: hidden;
}

/* background-color */

.bg-red {
  background-color: hsl(var(--clr-red));
}
.bg-black {
  background-color: hsl(var(--clr-black));
}
.bg-green {
  background-color: hsl(var(--clr-green));
}
.bg-blue {
  background-color: hsl(var(--clr-blue));
}
.bg-yellow {
  background-color: hsl(var(--clr-yellow));
}
.bg-gray {
  background-color: hsl(var(--clr-gray));
}
.bg-light-gray {
  background-color: hsl(var(--clr-gray-light));
}
.bg-very-light-gray {
  background-color: hsl(var(--clr-very-light-gray));
}
.bg-white {
  background-color: hsl(var(--clr-white));
}

/* Text-color */

.text-red {
  color: hsl(var(--clr-red));
}
.text-black {
  color: hsl(var(--clr-black));
}
.text-green {
  color: hsl(var(--clr-green));
}
.text-blue {
  color: hsl(var(--clr-blue));
}
.text-yellow {
  color: hsl(var(--clr-yellow));
}
.text-gray {
  color: hsl(var(--clr-gray));
}
.text-light-gray {
  color: hsl(var(--clr-gray-light));
}
.text-very-light-gray {
  color: hsl(var(--clr-very-light-gray));
}
.text-white {
  color: hsl(var(--clr-white));
}

/* font-family */

.fs-poppins {
  font-family: var(--font-poppins);
}
.fs-montserrat {
  font-family: var(--font-montserrat);
}

/* font-size */

.fs-900 {
  font-size: var(--fs-bf-194);
}
.fs-800 {
  font-size: var(--fs-bf-109);
}
.fs-700 {
  font-size: var(--fs-bf-80);
}
.fs-600 {
  font-size: var(--fs-bf-65);
}
.fs-500 {
  font-size: var(--fs-bf-50);
}
.fs-400 {
  font-size: var(--fs-bf-45);
}
.fs-300 {
  font-size: var(--fs-bf-30);
}
.fs-200 {
  font-size: var(--fs-bf-20);
}
.fs-100 {
  font-size: var(--fs-bf-16);
}
.fs-50 {
  font-size: var(--fs-bf-15);
}

.bold-100 {
  font-weight: 100;
}
.bold-200 {
  font-weight: 200;
}
.bold-300 {
  font-weight: 300;
}
.bold-400 {
  font-weight: 400;
}
.bold-500 {
  font-weight: 500;
}
.bold-600 {
  font-weight: 600;
}
.bold-700 {
  font-weight: 700;
}
.bold-800 {
  font-weight: 800;
}
.bold-900 {
  font-weight: 900;
}
.bold-bold {
  font-weight: bold;
}
.bold-bolder {
  font-weight: bolder;
}

/* ========Component Utility Class=========== */
.uil{
  cursor: pointer;
}

.flex {
  display: flex;
  gap: var(--flex-gap, 1rem);
}

.grid {
  display: grid;
  gap: var(--grid-gap, 1rem);
}

.container {
  width: 96vw;
  margin-inline: auto;
  padding-inline: 2rem;
}



/* ===========Utility End Class=================== */

/* ==========Header Section================ */

.primary-header {
  justify-content: space-between;
  align-items: center;
  padding-block: 2rem;
}

.header-inner-one {
  align-items: center;
  width: 350px;
  margin: 0;
}

.logo {
  margin-right: 0rem;
}

.mobile-close-btn {
  display: none;
}

.primary-navigation {
  margin: 0;
  padding: 0;
  list-style: none;
  --flex-gap: 3rem;
}

.primary-navigation .active {
  color: #000000;
}

.primary-navigation a {
  text-decoration: none;
  color: hsl(var(--clr-black) / 0.6);
  cursor: pointer;
}

.header-login {
  justify-content: space-between;
  align-items: center;
  --flex-gap: 2rem;
}

.header-login .uil-shopping-bag {
  font-size: 2rem;
  margin-top: -0.5rem;
  position: relative;
}

.header-login .uil-shopping-bag::after {
  content: "0";
  position: absolute;
  font-size: 1rem;
  font-weight: 700;
  color: hsl(var(--clr-white));
  margin-top: -3rem;
  margin-left: 1rem;
  border-radius: 0.3rem;
  display: grid;
  width: 1rem;
  height: 1.2rem;
  background-color: hsl(var(--clr-red));
}

.mobile-open-btn {
  display: none;
}

/* ========Cart Box==================== */

.cart-icon{
  position: absolute;
  inset: 0% 30% 0% 0%;
  background-color: hsl(var(--clr-very-light-gray));
  transform: translateX(-100%);
  transition: transform 250ms ease-in-out;
  z-index: 111;
}

.cart-icon[data-visible="true"]{
transform: translateX(0%);
}

.shopping{
  padding: 2rem;
  justify-content: space-between;
  align-items: center;
}

.shopping > p{
  font-size: var(--fs-bf-20);
  font-family: var(--font-montserrat);
}

.shopping > i{
  font-size: 1.5rem;
  color: hsl(var(--clr-black) / 0.8);
  transition: transform 250ms ease-in-out;
}

.shopping i:hover{
  transform: rotate(90deg);
}

.cart{
  flex-direction: column;
  justify-content: center;
  width: 100%;
  --flex-gap: 0.5rem;
  align-items: center;
  font-family: var(--font-poppins);
  text-transform: uppercase;
  color: hsl(var(--clr-black) / 0.5);
}

.cart > i{
  font-size: 5rem;
  margin-bottom: -2rem;
}

/* ========Cart Box==================== */

/* ========Header Media Quaries================= */

/* =========Mobile Device============ */

@media (max-width: 35em) {
  .primary-navigation {
    position: fixed;
    flex-direction: column;
    z-index: 999;
    text-align: center;
    --flex-gap: 1.7rem;
    inset: 0 0 0 0;
    background-color: hsl(var(--clr-gray-light) / 0.9);
    padding: clamp(3rem, 30vh, 10rem) 0;
    transform: translateY(-100%);
    transition: transform 250ms ease-in-out;
  }

  .primary-navigation[data-visible="true"]{
    transform: translateY(0%);
  }

  .primary-navigation a {
    font-size: var(--fs-bf-30);
  }

  .header-login {
    --flex-gap: 1.5rem;
    margin-left: 4rem;
  }
  .mobile-close-btn {
    display: block;
    z-index: 88899;
    top: 5rem;
    right: 13rem;
    border: 0;
    position: fixed;
    font-size: 3rem;
    cursor: pointer;
    transform: translateY(-300%);
    transition: transform 250ms ease-in-out;
  }

  .mobile-close-btn[data-visible="true"]{
    transform: translateY(0%);
  }

  .mobile-open-btn {
    display: block;
    font-size: 2rem;
    cursor: pointer;
  }
  .cart-icon{
    z-index: 9999;
    position: fixed;
  }
}

/* ==================Mobile Devise============= */

@media (min-width: 35em) and (max-width: 59em){
  .primary-navigation {
    position: absolute;
    flex-direction: column;
    z-index: 9;
    text-align: center;
    --flex-gap: 1.7rem;
    inset: 0 0 0 0;
    background-color: hsl(var(--clr-gray-light) / 0.9);
    padding: clamp(3rem, 30vh, 10rem) 0;
    transform: translateY(-100%);
    transition: transform 250ms ease-in-out;
  }

  .primary-navigation[data-visible="true"]{
    transform: translateY(0%);
  }

  .primary-navigation a {
    font-size: var(--fs-bf-30);
  }

  .header-login {
    --flex-gap: 1.5rem;
    margin-left: clamp(4rem, 30vw, 35rem);
  }
  .mobile-close-btn {
    display: block;
    z-index: 99;
    position: absolute;
    top: 5rem;
    right: 24.5rem;
    border: 0;
    font-size: 3rem;
    cursor: pointer;
    transform: translateY(-300%);
    transition: transform 250ms ease-in-out;
  }

  .mobile-close-btn[data-visible="true"]{
    transform: translateY(0%);
  }

  .mobile-open-btn {
    display: block;
    font-size: 2rem;
    cursor: pointer;
  }
  .cart-icon{
    z-index: 9999;
    position: fixed;
  }
}


/* //Desktop Media Quaries===== */

@media (min-width: 59em){
  .cart-icon{
    position: absolute;
    inset: 10% 5% 50% 60%;
    background-color: hsl(var(--clr-very-light-gray));
    transform: translateX(0%);
    transition: none;
    border-radius: 1rem;
    transform: translateX(150%);
    transition: transform 250ms ease-in-out;
    z-index: 222;
  }

  .cart-icon[data-visible="true"]{
    transform: translateX(0%);
  }
.cart-icon .shopping{
  display: none;
}
  .cart{
    padding-top: 4rem;
  }
  
}

/* ========Header End Media Quaries================= */

/* ==========End Of Header Section================ */

/* ================================================== */

/* Hero Section  */

/* ================================================== */
/* ======================================== */
.block{display: block;}

.uppercase{text-transform: uppercase;}
.lineheight{line-height: var(--line, 3rem);}
.lineheight-2{line-height: var(--line2, 4rem);}

.large-btn{
  border: 0;
  padding: .7rem 1rem;
  border-radius: 2rem;
  cursor: pointer;
  transition: transform 250ms ease-in-out;
}

.large-btn:hover {
  background-color: hsl(var(--clr-black));
  box-shadow: 3px 2px 37px -6px rgba(255,255,255,0.69);
}

/* ======================================== */

 
.hero-section{
  width: 93vw;
  margin-inline: auto;
  padding-inline: 2rem;
  background-color: hsl(var(--clr-gray));

  border-radius: 2rem;
  padding-top: 5rem;
}
.hero-section >* img{
  margin-top: -11rem;
  margin-left: 2rem;
}

.hero-inner{
  justify-content: space-between;
  align-items: center;
  --flex-gap: 5rem;
  margin-top: -3.5rem;
  padding-bottom: 4rem;
  border: 2rem;
}

.hero-inner button{
  border-radius: 8px;
}

.hero-inner button a{
  color: aliceblue;
  text-decoration: none;
  font-size:  13px;
}

.hero-info{
  display: none;
}



@media (min-width: 35em) and (max-width: 59em){
  .hero-section{
    width: 95vw;
    margin-inline: auto;
    padding-inline: 4rem;
    background-color: hsl(var(--clr-gray));
    border-radius: 2rem;
    padding-top: 7rem;
  }
  .hero-section >* img{
    margin-top: -10rem;
    margin-left: 4rem;
  }
  
  .hero-inner{
    justify-content: space-between;
    align-items: center;
    --flex-gap: 5rem;
    margin-top: -8.5rem;
    padding-bottom: 4rem;
  
  }

  .lineheight-2{
    --line2: 7rem;
  }
  
}

@media (min-width: 59em){
  .hero-section{
    width: 95vw;
    margin-inline: auto;
    padding-inline: 8rem;
    padding-top: clamp(4rem, 30vh, 15rem);
  }
  .hero-section >* img{
    margin-top: -30rem;
  }
  
  .hero-inner{
    justify-content: space-between;
    align-items: center;
    --flex-gap: 5rem;
    margin-top: -8.5rem;
    padding-bottom: 4rem;
  
  }
  .lineheight{
    --line: 13rem
  }

  .lineheight-2{
    --line2: 12rem;
  }
  .hero-info{
    display: block;
    text-align: end;
    width: 25%;
    
  }
  
  .big-wireless{
    font-size: 5rem;
  }
  .hero-inner{
    margin-top: -14rem;
    padding-bottom: 8rem;
  }
  
}


/* =================Product Section===================== */

.product-section{
  width: 93vw;
  margin-inline: auto;
  
}

.category{
  border-radius: 2rem;
  grid-template-columns: repeat(2, 1fr);
  align-items: flex-end;
  padding: 7rem 4rem 2rem 4rem;
  position: relative;
  overflow: hidden;
  z-index: 777;
  margin-block: 1rem;
}

.prdduct-btn{
  margin-top: 1rem;
  padding-inline: 2rem;
}
.earphone{
  color: hsl(var(--clr-white) / 0.2);
}

.product-img1{
  position: absolute;
  top: -2.3rem;
  right: 3rem;
  z-index: -11;
}

.product-img2{
  position: absolute;
  right: -6rem;
  top: -0.5rem;
  }

.product-img3{
  position: absolute;
  width: 80%;
  right: -3.5rem;
  top: 2.5rem;
  }

.product-img4{
  position: absolute;
  width: 50%;
  right: 1rem;
  top: 5rem;
  }

.product-img5{
  position: absolute;
  width: 100%;
  right: -4rem;
  top: 1rem;
  z-index: -1;
  }


.product-img6{
  position: absolute;
  width: 70%;
  right: -3rem;
  top: 5rem;
  z-index: -1;
  }


  /* ================================= */

  .category:nth-child(1){
    grid-area: one;
  }
  .category:nth-child(2){
    grid-area: two;
  }
  .category:nth-child(3){
    grid-area: three;
  }
  .category:nth-child(4){
    grid-area: four;
  }
  .category:nth-child(5){
    grid-area: five;
  }
  .category:nth-child(6){
    grid-area: six;
  }

  @media (min-width: 35em) and (max-width: 59em){
    .product-section{
      width: 95vw;
      margin-inline: auto;
      margin-block: 2rem;
      gap: 1.5rem;
      display: grid;
      grid-template-areas: 
      'one two'
      'three three'
      'six five'
      'four four';
    }
    
    .category{
      border-radius: 2rem;
      grid-template-columns: repeat(2, 1fr);
      align-items: flex-end;
      padding: 7rem 4rem 2rem 4rem;
      position: relative;
      overflow: hidden;
      z-index: 777;
      margin-block: 0rem;

    }

    .product-img3{
      position: absolute;
      width: 60%;
      right: -1rem;
      top: 1rem;
      }
    .product-img4{
      position: absolute;
      width: 50%;
      right: -1rem;
      top: 1rem;
      }
    .product-img5{
      position: absolute;
      width: 110%;
      top: 2.8rem;
      }
  }


  @media (min-width: 59em){
    .product-section{
      width: 95vw;
      margin-inline: auto;
      margin-block: 2rem;
      gap: 1.5rem;
      display: grid;
      grid-template-areas: 
      'one two three three'
      'four four five six';
    }
    .category{
      border-radius: 2rem;
      grid-template-columns: repeat(2, 1fr);
      align-items: flex-end;
      padding: 10rem 4rem 4rem 3rem;
      position: relative;
      overflow: hidden;
      z-index: 777;
      margin-block: 0rem;

    }

    .product-img1{
      position: absolute;
      top: 1rem;
      width: 150%;
      right: -10rem;
      z-index: -11;
    }
    
    .product-img2{
      position: absolute;
      right: -6rem;
      top: 2rem;
      }
    
    .product-img3{
      position: absolute;
      width: 80%;
      right: -3.5rem;
      top: 1rem;
      }
    
    .product-img4{
      position: absolute;
      width: 50%;
      right: 1rem;
      top: 5rem;
      }
    
    .product-img5{
      position: absolute;
      width: 100%;
      right: -4rem;
      top: 1rem;
      z-index: -1;
      }
    
    
    .product-img6{
      position: absolute;
      width: 70%;
      right: -3rem;
      top: 5rem;
      z-index: -1;
      }

    .lineheight{
      --line: 3rem
    }
    .lineheight-2{
      --line: 3rem
    }
  }

/* =================Product Section===================== */


/* --===============Service Section================== */

.service-section{
  width: 90vw;
  margin-inline: auto;
  margin-block: 2rem;
  display: grid;
  gap: 1.5rem;
  grid-template-areas: 
  'one two'
  'three four';
}

.service:nth-child(1){
  grid-area: one;
}
.service:nth-child(2){
  grid-area: two;
}
.service:nth-child(3){
  grid-area: three;
}
.service:nth-child(4){
  grid-area: four;
}

.service{
display: grid;
place-items: center;
text-align: center;
gap: 1rem;
}

.service .fs-200{
  font-size: .9rem;
}
.service .fs-50{
  font-size: .79rem;
}

@media (min-width: 59em){
  .service-section{
    width: 90vw;
    margin-inline: auto;
    margin-block: 2rem;
    display: grid;
    gap: 5rem;
    grid-template-areas: 
    'one two three four';
  }

  .service .fs-200{
    font-size: 1rem;
  }
  .service .fs-50{
    font-size: .79rem;
  }
}

/* =============Feature Section=============== */

.feature-section{
  width: 90vw;
  margin-inline: auto;
  border-radius: 2rem;
  position: relative;
  margin-top: 15rem;
  display: grid;
  gap: 1rem;
  place-items: center;
  margin-bottom: 2rem;
  text-align: center;
  padding-inline: 4rem;
  padding: 8rem 2rem 2rem 2rem;
}

.feature-section >* img{
  margin-top: -18rem;
  position: absolute;
  right: -1.5rem;
}

.feature-info{
  padding-inline: 1rem;
  margin-top: 1rem;
}

@media (min-width: 35em) and (max-width: 59em){
  .feature-section{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 55rem;
    text-align: left;
    padding: 2rem 0rem;
    gap: 7rem;
  }
  .feature-section >* img{
    margin-top: -18rem;
    position: absolute;
    right: 5rem;
  }
  .smile{
    display: block;
    line-height: 2rem;
    padding-bottom: 1rem;
  }
}

@media (min-width: 59em){
.feature-section{
  width: 95vw;
  display: grid;
  grid-template-columns: repeat(2,1fr);
  text-align: left;
  gap: 15rem;
  padding: 4rem 7rem;
  place-items: start;
  z-index: 2;
}

.feature-section >* img{
  margin-top: -25rem;
  position: absolute;
  right: 19rem;
  z-index: -1;
}

.font-size{
  font-size: 5rem;
  line-height: 4rem;
}

.smile{
  display: block;
  margin-bottom: 2rem;
}
}


/* =============Best-selling Product==================== */

.best-product{
  padding-block: 5rem;
  text-align: center;
}

.best-Seller{
  width: 90vw;
  margin-inline: auto;
  text-align: center;
  display: grid;
  gap: 3rem;
  grid-template-areas: 
  'one'
  'two'
  'three'
  'four'
  'five'
  'six'
  'seven'
  'eight';
}

.best-Seller:nth-child(1){
  grid-area: one;
}
.best-Seller:nth-child(2){
  grid-area: two;
}
.best-Seller:nth-child(3){
  grid-area: three;
}
.best-Seller:nth-child(4){
  grid-area: four;
}
.best-Seller:nth-child(5){
  grid-area: five;
}
.best-Seller:nth-child(6){
  grid-area: six;
}
.best-Seller:nth-child(7){
  grid-area: seven;
}
.best-Seller:nth-child(8){
  grid-area: eight;
}



.product{
  text-align: left;
  --grid-gap: 0.5rem;
  cursor: pointer;
  position: relative;
  overflow-x: hidden;
}

.product:hover{
  color: hsl(var(--clr-red));
}

.product-details{
  position: absolute;
  height: 25%;
  place-items: center;
  font-size: 1.5rem;
  --grid-gap: 0rem;
  width: 10%;
  right: 0;
  top: 0;
  border-radius: .5rem;
  transform: translateX(120%);
  transition: transform 250ms ease-in-out;
}

.product:hover .product-details{
  transform: translateX(0%);
}

.product > img{
 border-radius: 2rem;
}
.letter-spacing{
  letter-spacing: -1px;
  font-size: 2.2rem;
}

@media (min-width: 35em) and (max-width: 59em){
  .best-Seller{
    width: 90vw;
    margin-inline: auto;
    text-align: center;
    display: grid;
    gap: 3rem;
    padding-block: 2rem;
    grid-template-areas: 
    'one two'
    'three four'
    'five six'
    'seven eight';
  }
}

@media (min-width: 59em){
  .best-Seller{
    width: 95vw;
    margin-inline: auto;
    text-align: center;
    display: grid;
    gap: 3rem;
    padding-block: 2rem;
    grid-template-areas: 
    'one two three four'
    'five six seven eight';
  }
}


/* ====================Feature Section Secont ? Feature Green */

.feature-green img{
  margin-top: -18rem;
  right: 4.5rem;
  width: 70%;
}

@media (min-width: 35em) and (max-width: 59em){
  .feature-green img{
    margin-top: -17rem;
    right: 12rem;
    width: 80%;
  }
}

@media (min-width: 59em){
  .feature-green img{
    margin-top: -19rem;
    right: 40rem;
    width: 50%;
  }
}

/* =============================Recent News Section================ */

.padding-inline{
  padding-inline: 0.8rem;
}

.recent-news{
  width: 90vw;
  margin-inline: auto;
  --grid-gap: 1rem;
  padding-bottom: 2rem;
  grid-template-areas: 
  'one'
  'two'
  'three';
}

.recent-news:nth-child(1){
  grid-area: one;
}
.recent-news:nth-child(2){
  grid-area: two;
}
.recent-news:nth-child(3){
  grid-area: three;
}


.news > img{
  border-radius: 2rem;
  cursor: pointer;
  transition: transform 250ms ease-in-out;
}

.news >img:hover{
  box-shadow: 5px 5px 57px -6px hsl(var(--clr-black) /0.5);
  transition: transform 250ms ease-in-out;
}


@media (min-width: 59em){
  .recent-news{
    width: 95vw;
    margin-inline: auto;
    --grid-gap: 2rem;
    padding-bottom: 5rem;
    grid-template-areas: 
    'one two three';
  }
  .news{
    --grid-gap: 0.8rem;
  }
  .news > h2{
     font-size: 1.2rem;
  }
  .news > p{
    font-size: 0.9rem;
    padding-right: 4rem;
  }
}

.brands{
  place-items: center;
  --grid-gap: 4rem;
  padding-block: 4rem;
  margin-block: 2rem;
  background-color: hsl(var(--clr-gray));
  grid-template-areas: 
  'one'
  'two'
  'three'
  'four'
  'five';
}

.brands:nth-child(1){
  grid-area: one;
}
.brands:nth-child(2){
  grid-area: two;
}
.brands:nth-child(3){
  grid-area: three;
}
.brands:nth-child(4){
  grid-area: four;
}
.brands:nth-child(5){
  grid-area: five;
}

.brands >* img{
  opacity: 0.2;
  cursor: pointer;
  transition: transform 250ms ease-in-out;
}

.brands >* img:hover{
  opacity: 1;
}

@media (min-width: 35em) and (max-width: 59em){
  .brands{
    grid-template-areas:
    'one two'
    'three four';
  }
}

@media (min-width: 59em){
  .brands{
    grid-template-areas:
    'one two three four five';
  }
}


/* ================footer==================== */

.footer{
  margin-block: 5rem;
  width: 85vw;
  margin-inline: auto;
  grid-auto-columns: auto;
  --grid-gap:1.5rem;
  grid-template-areas: 
  'one'
  'two'
  'three'
  'four';
}

.footer:nth-child(1){
  grid-area: one;
}
.footer:nth-child(2){
  grid-area: two;
}
.footer:nth-child(3){
  grid-area: three;
}
.footer:nth-child(4){
  grid-area: four;
}

.footer-logo{
  --grid-gap: 2rem;
  /* width: 3%;
  height: 3%; */
}

.footer-logo > p{
  width: 60%;
}

.footer-logo .social-media{
  --flex-gap: 1.5rem;
}

.footer-menu > ul{
  margin: 0;
  padding: 0;
  list-style: none;
}

.footer-menu li{
  margin-top: 0.5rem;
}

.footer-menu a{
  text-decoration: none;
}

.footer .contact > p{
  width: 60%;
}

.inputField{
padding: .5rem 0.5rem;
border-radius: 4rem;
}

.inputField > button{
  border: 0;
  padding: 0.7rem 1.5rem;
  border-radius: 3rem;
  cursor: pointer;
}

.inputField input{
  border: 0;
  width: 60%;
}

.inputField input:hover,
.inputField input:focus{
  outline: none;
}

.inputField input[type="email"]{
  margin-left: 2.5rem;
}


@media (min-width: 35em) and (max-width: 59em){
  .footer{
    --grid-gap: 0.5rem
    grid-auto-columns: auto;
    grid-template-areas: 
    'one two'
    'three four';
  }
  
.footer-logo > p{
  font-size: 1rem;
}

.footer-logo .social-media{
  --flex-gap: 1.5rem;
  margin-bottom: 1rem;
}

.footer-menu li{
  margin-top: 0.1rem;
}

.footer-menu a{
font-size: 1rem;
}

.updates{
  font-size: 1.5rem;
}
.inputField input{
  border: 0;
  width: 50%;
}


.inputField input[type="email"]{
  margin-left: 2rem;
}
}



@media (min-width: 59em){
  .footer{
    width: 92vw;
    margin-top: 6rem;
    --grid-gap: 2rem;
    grid-auto-columns: auto;
    grid-template-areas: 
    'one two three four';
  }
  .footer-logo > p{
    font-size: 1rem;
  }
  .footer-menu > h3{
   font-size: 1rem;
  }
  .footer-menu a{
    font-size: 1rem;
    }

    .contact > h3{
      font-size: 1rem;
    }
    .emails > h3{
      font-size: 1rem;
    }

    .inputField input{
      border: 0;
      width: 100%;
    }
    
}


/* ==============CopyRight------------------- */
.text-align{
  text-align: center;
}

.p-top{
  padding: 1rem 0;
}

.copyRight{
  margin-top: 5rem;
  padding: 1rem 2rem;
  margin-inline: auto;
  background-color: hsl(var(--clr-black));
  color: hsl(var(--clr-white) / 0.5);
}

@media (min-width: 35em) and (max-width: 59em){
  .copyRight{
   display: flex;
   justify-content: space-between;
   align-items: center;
  }
}

@media (min-width: 59em){
  .copyRight{
   display: flex;
   justify-content: space-between;
   align-items: center;
  }
  .c-font{
    font-size: 1rem;
  }
}