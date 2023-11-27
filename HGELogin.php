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

<div class="log_sign">
<div class="SHeader">
<form action="./loginmagic2.php" method="POST">
        <h2>Log-In</h2>
    </div>
    <div class="textbox">
    <input type = "text" name="id" placeholder="Username"><br/><br/>
    </div>

    <div class="textbox">
    <input type = "password" name="pass" placeholder="Password"><br/><br/>
    </div>

    <div class="btn">
        <button type="submit" name="submit">Log-In</button>
    </div>
   
</div>
<?php

    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Enter all fields.</p>";
        }

        elseif($_GET["error"] == "wronglogin"){
            echo "<p>Username does not match with the password.</p>";

        }
    
}


    ?>
     </form>

</body>

<?php
include_once 'HGEfooter.php';

?>
</html>