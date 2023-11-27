<?php
include_once 'HGEHeader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipment</title>

    <header class="Head">
    </header>
    <script async src="https://api.countapi.xyz/hit/HomeGymEquipment.com/81bdfb92-5489-42b8-b5cc-7d9146648009?callback=websiteVisits"></script>
</head>

<body>

<div class="MainContainer">

 <div class="Contain-slider">
     <div class="slides">
        
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

     <div class="slide first">
         <img src="./Imgs/AbRoller2.jpg" alt="">
     </div>
     <div class="slide">
         <img src="./Imgs/StationaryBike.jpg" alt="">
     </div>
     <div class="slide">
         <img src="./Imgs/Dumbbell2.jpg" alt="">
     </div>
     <div class="slide">
         <img src="./Imgs/Treadmill.jpg" alt="">
     </div>
     
     <!--slide automatic start-->
    <div class="naigate-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
     </div>
     <!--slide automatic end-->

     <!--slide manual start-->
<div class="navigate-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
</div>
<!--slide manual end-->

     </div>
 </div>
</div>

<!--Featured equipment-->
 <div class= "Container">

     <h3 class="title">Featured Equipment</h3>

     <div class="vid-container">
         <div class="vid"> 
         <video  src="./vids/Dumbbells.mp4" width="544"
               height="304" autoplay muted loop >
     </video>
     <p>
         The Dumbbells are good equipment to<br> stretch your biceps
         and triceps,and very <br>affordable as well.
         <a href="./Gallery.php">Click here</a> for more deatils.
        </p>
         </div>
  
     <div class="vid">
     <video  src="./vids/Treadmill.mp4" width="544"
               height="304" autoplay muted loop >
     </video>
     <p>The Treadmill will allow you to run<br> as far as you can in one place!<br>
         <a href="./Gallery.php">Click here</a> for more deatils.</p>
     </div>

     </div>

     <div class="equip-container">

        <div class="Item" data-name="I1">
            <a href="./Gallery.php">
            <img src="./Imgs/Dumbbell.jpg" alt="Dumbbell">
            <h3>Dumbbells</h3>
            <div class="price">K___</div>
            </a>
        </div>

        <div class="Item" data-name="I2">
        <a href="./Gallery.php">
            <img src="./Imgs/Treadmill.jpg" alt="Treadmill">
            <h3>Treadmill</h3>
            <div class="price">K___</div>
        </a>
        </div>

        <div class="Item" data-name="I3">
        <a href="./Gallery.php">
            <img src="./Imgs/StationaryBike.jpg" alt="bike">
            <h3>Stationary Bike</h3>
            <div class="price">K___</div>
        </a>
        </div>

        <div class="Item" data-name="I4">
        <a href="./Gallery.php">
            <img src="./Imgs/AbRoller2.jpg" alt="Ab roller">
            <h3>Ab Roller</h3>
            <div class="price">K___</div>
        </a>
        </div>
             
     </div>
 </div>
 


<h3>View Count: <span id="visits"></span></h3>
<script>
    function websiteVisits(response) {
    document.querySelector("#visits").textContent = response.value;
}
</script>
</body>
<br/>
<?php
include_once 'HGEfooter.php';

?>

</html>