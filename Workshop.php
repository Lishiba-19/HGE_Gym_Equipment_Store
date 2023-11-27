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
    <script async src="https://api.countapi.xyz/hit/HomeGymEquipment.com1/db9f0226-dc7d-40b3-b2d5-4a1a39e597ab?callback=websiteVisits"></script>
</head>

<body>
<h3>Our Services</h3>

<div class="service-main">
<div class="service-section">
  
    <div class="service">
    <div class="icon-wrapper">
    <i class="fas fa-hammer"></i>
    </div>
        Repairing Services
        <p>
            <br>
            We repair different type of gym equipment
            from gym rollers to bench presses. Send in your 
            equipment and we'll do the rest!
        </p>

    </div>

    <div class="service">
    <div class="icon-wrapper">
    <i class="fas fa-chart-area"></i>
    </div>
        Sales services
        <p>
            <br>
           We not only sell equipment, but we do 
           buy some equipment from you, if you do
           have in acceptable condition. This equipment is refurbished and 
           then put for re-sale.

        </p>

    </div>

    <div class="service">
    <div class="icon-wrapper">
    <i class="fas fa-phone"></i>
    </div>
        Contact Us
        <p>
            <br>
           You are free to reach out to us via
           email for any query regarding our services
           or our equipment, your feedback is always
           important.

        </p>
    </div>

    <div class="service">
    <div class="icon-wrapper">
    <i class="fas fa-user"></i>
    </div>
        One on One bookings
        <p>
            <br>
          You can get to book any of our trainers,
          just visit the booking section and more
          details will be shown to you.

        </p>
    </div>
</div>

<div class="service-other">
    <h3>Some of our repairs</h3>
    <img src="./Imgs/gym-5977600_1920.jpg">
    <img src="./Imgs/machines-91849_1920.jpg">
 
</div>
</div>

<h3>View Count: <span id="visits2"></span></h3>
<script>
    function websiteVisits(response) {
    document.querySelector("#visits2").textContent = response.value;
}
</script>
</body>

<?php
include_once 'HGEfooter.php';

?>
</html>