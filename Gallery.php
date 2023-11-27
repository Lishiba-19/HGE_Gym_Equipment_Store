<?php

include_once 'HGEHeader.php';


if (isset($_POST['add_to_cart'])){

    if(isset($_SESSION['Cart'])){

      $item_array_id = array_column($_SESSION['Cart'], "equipment_id");

        if(in_array($_POST['equipment_id'], $item_array_id)){
            echo "<script>alert('Product is already in cart.')</script>";
            echo "<script>window.location ='./Gallery.php'</script>";
        }
        else
    {
        $count =count($_SESSION['Cart']);
        $item_array = array(
            'equipment_id' => $_POST['equipment_id']
        );

        $_SESSION['Cart'][$count]= $item_array;
        
    }
    }
    else{
      

        $item_array = array(
            'equipment_id' => $_POST['equipment_id']
        );

        $_SESSION['Cart'][0]=$item_array;
        
    }



}
require_once './Includes/Functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Gym Equipment</title>

    <header class="Head">
    </header>
    <script async src="https://api.countapi.xyz/hit/HomeGymEquipment.com4/205cd8a5-3dea-4150-8bc3-de8f10dcad55?callback=websiteVisits"></script> 
</head>

<body>

<!--Featured equipment-->
<div class= "Container">

<div class="cart-area">
    <a href="./ShoppingCart.php">
        <i class="fas fa-shopping-cart"></i>Cart
        <?php
          if(isset($_SESSION['Cart'])){
              $count = count($_SESSION['Cart']);

              echo "<span>$count</span>";
          }
          else{
            echo "<span>0</span>";
          }


        ?>
    </a>
</div>
<h3 class="title">Our Products</h3>
<div class="equip-container">

   <div class="Item" data-name="I1">
       <img src="./Imgs/Dumbbell.jpg" alt="Dumbbell">
       <h3>Dumbbells</h3>
       <div class="price">Click for more details</div>
   </div>

   <div class="Item" data-name="I2">
       <img src="./Imgs/Treadmill.jpg" alt="Treadmill">
       <h3>Treadmill</h3>
       <div class="price">Click for more details</div>
   </div>

   <div class="Item" data-name="I3">
       <img src="./Imgs/StationaryBike.jpg" alt="bike">
       <h3>Stationary Bike</h3>
       <div class="price">Click for more details</div>
   </div>

   <div class="Item" data-name="I4">
       <img src="./Imgs/AbRoller2.jpg" alt="Ab roller">
       <h3>Ab Roller</h3>
       <div class="price">Click for more details</div>
   </div>

   <div class="Item" data-name="I5">
       <img src="./Imgs/SkippingRope.jpg" alt="Ab roller">
       <h3>Skipping Rope</h3>
       <div class="price">Click for more details</div>
   </div>

   <div class="Item" data-name="I6">
       <img src="./Imgs/Bench-Press.jpg" alt="Ab roller">
       <h3>Bench Press</h3>
       <div class="price">Click for more details</div>
   </div>
        
</div>
</div>


<div class="Item-Preview">

<div class="preview-Item" data-target="I1">
<form action='./Gallery.php' method='POST'>
<img src="./Imgs/Dumbbell.jpg" alt="Dumbbell">
<i class="fas fa-times"></i>
       <h3>Dumbbells</h3>
       <div class="price">K40 Each</div>
       <div class="buttons">
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="1">
       </div>

</div>
</form>

<div class="preview-Item" data-target="I2">
<form action='./Gallery.php' method='POST'>
<img src="./Imgs/Treadmill.jpg" alt="Treadmill">
<i class="fas fa-times"></i>
       <h3>Treadmill</h3>
       <div class="price">K1940 Each</div>
       <div class="buttons">
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="2">
       </div>

</div>
</form>


<div class="preview-Item" data-target="I3">
<form action='./Gallery.php' method='POST'>
<img src="./Imgs/StationaryBike.jpg" alt="bike">
<i class="fas fa-times"></i>
       <h3>Stationary Bike</h3>
       <div class="price">K840 Each</div>
       <div class="buttons">
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="3">
       </div>

</div>
</form>


<div class="preview-Item" data-target="I4">
<form action='./Gallery.php' method='POST'>
<i class="fas fa-times"></i>
<img src="./Imgs/AbRoller2.jpg" alt="Ab roller">
       <h3>Ab Roller</h3>
       <div class="price">K240 Each</div>
       <div class="buttons">
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="4">
       </div>

</div>
</form>


<div class="preview-Item" data-target="I5">
<form action='./Gallery.php' method='POST'>
<i class="fas fa-times"></i>
<img src="./Imgs/SkippingRope.jpg" alt="Ab roller">
       <h3>Skipping Rope</h3>
       <div class="price">K35 Each</div>
       <div class="buttons">
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="5">
       </div>

</div>
</form>


<div class="preview-Item" data-target="I6">
<form action='./Gallery.php' method='POST'>
<img src='./Imgs/Dumbbell.jpg' alt='Dumbbell'>
<i class='fas fa-times'></i>
       <h3>Dumbbells</h3>
       <div class='price'>K40 Each</div>
       <div class='buttons'>
       <button type='submit' name='add_to_cart' class='Cart'>Add to Cart</button>
       <input type="hidden" name="equipment_id" value="6">
       </div>

</div>
</form>

</div>

</div>

<div class="rss-container">
 <script async defer src='https://p3k.org/rss/main.js?align=initial&amp;boxFillColor=%23dfdedd&amp;compact=true&amp;fontFace=10pt%20sans-serif&amp;frameColor=%23161008&amp;headless=false&amp;height=&amp;linkColor=%232c7395&amp;maxItems=10&amp;radius=5&amp;showXmlButton=true&amp;textColor=%2395412b&amp;titleBarColor=%23f4ad5d&amp;titleBarTextColor=%2377736e&amp;url=https%3A%2F%2Fgymjunkies.com%2Ffeed%2F&amp;width=900'></script>
 </div>
 
<h3>View Count: <span id="visits"></span></h3>
<script>
    function websiteVisits(response) {
    document.querySelector("#visits").textContent = response.value;
}
</script>

<script type="text/javascript">
let previewContainer = document.querySelector('.Item-Preview');
let previewItem = previewContainer.querySelectorAll('.preview-Item');

document.querySelectorAll('.equip-container .Item').forEach(Item =>{
    Item.onclick = () =>{
    previewContainer.style.display = 'flex';
    let name = Item.getAttribute('data-name');
    previewItem.forEach(ItemPreview =>{
 let target = ItemPreview.getAttribute('data-target');
 if(name == target){
    ItemPreview.classList.add('active');
}
});
};
});

previewItem.forEach(close =>{
    close.querySelector('.fa-times').onclick = () =>{
        close.classList.remove('active');
        previewContainer.style.display = 'none';
    }

});
</script>
</body>

<?php
include_once 'HGEfooter.php';

?>
</html>