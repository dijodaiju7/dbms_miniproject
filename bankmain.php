<!DOCTYPE html>
<head>
    <title>Banking Network | WELCOME</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

:root {
  --main-color: #28AF63 ;
}

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}

body, html {
    height: 100%;
}
/* The navigation bar */
.navbar {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0);
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
  background-color: #000000;

}

/* Links inside the navbar */
.navbar {
  display: inline-block;
  text-align: center;
  padding: 14px;
}

.navbar a {
  font-family: 'Poppins', sans-serif;
  color: #f2f2f2;
  padding: 14px;
  text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
  background: #38ef7d;
  color: black;
}

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("ales-nesetril-ex_p4AaBxbs-unsplash.jpg"); */
  background-image: linear-gradient(#000000, #202020);
  /* Set a specific height */
  height: 100%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family: 'Poppins', sans-serif;
}

.sub {
  font-family: 'Poppins', sans-serif;
  font-size: 24px;
  color: whitesmoke;
}

.header {
  font-size: 3.5rem;
}

.easier {
  background: -webkit-linear-gradient(#11998e, #38ef7d, #11998e, #38ef7d);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

button {
 display: inline-block;
 border-radius: 7px;
 border: none;
 background: #38ef7d;
 color: white;
 font-family: inherit;
 text-align: center;
 font-size: 13px;
 box-shadow: 0px 14px 56px -11px #38ef7d;
 width: 10em;
 padding: 1em;
 transition: all 0.4s;
 cursor: pointer;
}

.button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.4s;
}

.button span:after {
 content: '     for free';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -20px;
 transition: 0.7s;
}

.button:hover span {
 padding-right: 3.9em;
}

.button:hover span:after {
 opacity: 4;
 right: 0;
}

</style>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 class="header"><strong>Making your transactions
    <span class="easier">Waaay Easier</span>
  </strong></h1>
  <br>
    <p class="sub">Let's share without worries</p>
    <br>
    <button class="button" onclick="window.location.href='Mtransfer.php'"><span>Try it</span></button>
  </div>
</div>

<div class="navbar">
<a href="Mtransfer.php">Fund Transfer</a>
<a href="customers.php">Customers</a>
  <a href="deposit.php">Deposit</a>
  <a href="transaction.php">Transaction</a>
  <a href="withdrawal.php">Withdrawal</a>
</div>


</body>
</html>
<script>
$("document").ready(function(){
  $(".navbar__ham").on("click", function(){
    $(".navbar__links").toggleClass("active");
    
  });

  $(".navbar__links a li").on("click", function(){
    $(".navbar__links").removeClass("active");
  });
});




  
</script>