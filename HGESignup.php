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
<form action="./Includes/Sign-upMagic.php" method="POST">
    <div class="SHeader">
        <h2>Sign-Up</h2>
    </div>
    <div class="textbox">
    <input type = "text" name="First" placeholder="Firstname"> <br/><br/>
    </div>

    <div class="textbox">
    <input type = "text" name="Last" placeholder="Lastname"><br/><br/>
    </div>

    <div class="textbox">
    <input type = "text" name="email" placeholder="Email"><br/><br/>
    </div>

    <div class="textbox">
    <input type = "text" name="id" placeholder="Username"><br/><br/>
    </div>

    <div class="textbox">
    <input type = "password" name="pass" placeholder="Password"><br/><br/>
    </div>

    <div class="textbox">
    <input type = "password" name="repass" placeholder="Repeat Password"><br/><br/>
    </div>

    <div class="btn">
        <button type="submit" name="submit">Sign Up</button>
    </div>
<?php


    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Enter all fields.</p>";
    
        }

        elseif($_GET["error"] == "InvalidId"){
            echo "<p>Invalid User Id.</p>";

        }

        elseif($_GET["error"] == "InvalidEmail"){
            echo "<p>Invalid Email.</p>";
        }

        elseif($_GET["error"] == "PasswordsDontMatch"){
            echo "<p>Passwords Don't Match.</p>";
        }

        elseif($_GET["error"] == "PasswordsDontMatch"){
            echo "<p>Passwords Don't Match.</p>";
        }

        elseif($_GET["error"] == "Usersame/EmailTaken"){
            echo "<p>The username or email is already taken.</p>";
        }

        elseif($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again.</p>";
        }

        elseif($_GET["error"] == "none"){
            echo "<p>You have signed up.</p>";
        }



    }
    ?>
    </form>

</body>

<?php
include_once 'HGEfooter.php';

?>
</html>