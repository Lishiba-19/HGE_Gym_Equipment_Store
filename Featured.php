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
    <script async src="https://api.countapi.xyz/hit/HomeGymEquipment.com3/1b743d32-ef0c-4073-a1ff-aee7bfe0723f?callback=websiteVisits"></script>
</head>

<body>
<h2>Featured Products</h2>
<div class="featured-container">
    <div class="main-categ">
    <div class="categ1">
        <h3>Fitness Trackers</h3>
        <p> The modern successor to pedometers, 
            fitnness trackers is a type of wearable 
            technology you should desire to have.
            They monitor steps taken, heart rate, 
            calories burned, and a range of other 
            fitness metrics.</p>
       <img src="./Imgs/fitness-band.jpg">
    </div>

    <div class="categ2">
        <h3>Smart Watches</h3>
        <p>
            Smart watches are a lot like fitness trackers, but of course
            has more features. It is a good addition to your daily workout 
            as they have apps that monitor heart rate, your number of steps
            and many other features.
        </p>
        <img src="./Imgs/Smart Watch.jpg">

    </div>

    <div class="categ3">
        <h3>Smart Jewellery</h3>
        <p>
            Just like any smart wearable form of tech, smart
            Jewellery will also obtain health tracking data that
            the user can check on their phone or whatever device the 
            smart Jewellery will be linked to. A notable example is the 
            smart ring. 

        </p>
        <img src="./Imgs/smart-ring.jpg">
    </div>
    </div>


    <div class="right-categ">
    <h3>Wearable technology categories (Top Products)</h3>
    <div class="featured-categ" data-name="F1">
        <h3>1. Fitness Tracker</h3>
        <img src="./Imgs/fitness-band.jpg">
        <div class="price">Click for more details</div>
    </div>

    <div class="featured-categ" data-name="F2">
        <h3>2. Smart Watch</h3>
        <img src="./Imgs/smart-watch-889639_1280.jpg">
        <div class="price">Click for more details</div>
    </div>

    <div class="featured-categ" data-name="F3">
        <h3>3. Smart Ring</h3>
        <img src="./Imgs/smart-ring.jpg">
        <div class="price">Click for more details</div>
    </div>

    
    </div>

</div>

<div class="Item-Preview">
<div class="preview-Item" data-target="F1">
<i class="fas fa-times"></i>
<img src="./Imgs/fitness-band.jpg" alt="fitness band">
       <h3>Fitness band</h3>
       <div class="price">K2250 Each</div>
       <div class="buttons">
           <a href="" class="buy">Buy now</a>
           <a href="" class="Cart">Add to Cart</a>
       </div>

</div>

<div class="preview-Item" data-target="F2">
<i class="fas fa-times"></i>
<img src="./Imgs/smart-watch-889639_1280.jpg" alt="Smart watch">
       <h3>Smart watch</h3>
       <div class="price">K3350 Each</div>
       <div class="buttons">
           <a href="" class="buy">Buy now</a>
           <a href="" class="Cart">Add to Cart</a>
       </div>

</div>

<div class="preview-Item" data-target="F3">
<i class="fas fa-times"></i>
<img src="./Imgs/smart-ring.jpg" alt="smart ring">
       <h3>Smart ring</h3>
       <div class="price">K2940 Each</div>
       <div class="buttons">
           <a href="" class="buy">Buy now</a>
           <a href="" class="Cart">Add to Cart</a>
       </div>

</div>
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

document.querySelectorAll('.right-categ .featured-categ').forEach(Item =>{
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
include_once './HGEfooter.php';

?>
</html>