<?php
session_start();
include './Includes/DBHandler.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipment</title>
    <link href="./HGECss.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
    <script   src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <header class="Head">
    <nav class="navbar">
   
        
        <ul>
        <li class="MainLogo">Home Gym Equipment</li>
       
        <div class="Nav">
        <li><a href="./HGEHome.php">Home</a></li>
        <li><a href="./Information.php">Information</a></li>
        <li><a href="./Workshop.php">Workshop</a></li>
        <li><a href="./Gallery.php">Gallery</a></li>
        <li><a href="./Featured.php">Featured</a></li>
      
        <?php
           if (isset($_SESSION["userid"])){
            echo "<li><a href='./Booking.php'>Booking</a></li>";
            echo "<li><a href='./Contact.php'>Contact</a></li>";
            echo "<li><a href='./Wanted.php'> Wanted</a></li>";
            echo "<li><a href='./Includes/LogOutMagic.php'> Logout</a></li>";
  
        } 

        else {

           echo "<li><a href='./HGESignup.php'> Sign-up</a></li>";
           echo "<li><a href='./HGELogin.php'> Log-in</a></li>";
        }
        ?>
        </div>
     
        <input type="checkbox" id="res-menu">
          <label for="res-menu">
          <li class="menuBtn"><i class="fa fa-bars" id="sign-one"></i>
          <li class="menuBtn2"><i class="" id="sign-two"></i>
          </label>
        </li>
        <li class="Search-box">
          <form action="search.php" method="POST">
          <input type="text" name="search" placeholder="Search">
          <label class="icon">
        <button class="fas fa-search" type="submit" name="submit-search"></button>
        </label>
          </form>
    
 
        </li>
        </ul>
        </div>
    </nav>
    <script>
      $('label #sign-one').click(function(){
        $('nav ul div.Nav').toggleClass("show");
        $('body p').toggleClass("show2");
      });

      


    </script>

    </header>
</head>
<body>

<div class="cookie-container">
     <p>We use cookies in this website to offer you the best experience
        on the site and show you relevant ads. To learn more, read our 
        <a href="https://www.freeprivacypolicy.com/live/bffcead1-ee75-4526-8109-7a288539414e">privacy policy</a>.<br>
        <button class="cookie-btn">Okay</button>
     </p>
 </div>

 <script type="text/javascript">

const cookieContainer = document.querySelector(".cookie-container");
const cookieBtn = document.querySelector(".cookie-btn");

cookieBtn.addEventListener('click', () =>{
    cookieContainer.classList.remove('active');
    localStorage.setItem("cookiesDisplayed", true);
});


setTimeout(() => {
    if(!localStorage.getItem("cookiesDisplayed"))
    cookieContainer.classList.add('active');
}, 2000);


</script>
</body>
</html>