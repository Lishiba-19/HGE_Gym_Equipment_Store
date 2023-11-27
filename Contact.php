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
   
</head>

<body>
<main>
    <div class="contact">
    <form class="contact-form" action="./Includes/contactMagic.php" method="POST">
    <p>SEND YOUR ENQUIRY.</p>
       <input type="text" name="Fname" placeholder="Full name" required> <br><br>
       <input type="text" name="mail" placeholder="Your e-mail" required><br><br>
       <input type="text" name="subject" placeholder="Subject" required><br><br>
       <textarea name="message" placeholder="Message" required></textarea><br><br>
       <button type="submit" name="submit">SEND</button>
    </form>

    <?php

if (isset($_GET["error"])){
    if($_GET["error"] == "none"){
        echo "<p>Message Sent!.</p>";
    }
}
    ?>
    </div>
</main>


</body>

<?php
include_once 'HGEfooter.php';

?>
</html>