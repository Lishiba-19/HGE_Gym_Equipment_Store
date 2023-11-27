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

<h3>Second Hand equipment for sale</h3>

<div class="second-equipment">
     <?php

     $sql = "SELECT * FROM items;";
     $result = mysqli_query($connect, $sql);
     $queryResults = mysqli_num_rows($result);

     if ($queryResults > 0) {
         while ($row = mysqli_fetch_assoc($result)){
             echo "<div class='second-hand-equip'>
             <h3>".$row['ItemName']."</h3>
             <img src=".$row['ItemImage'].">
             <p>K".$row['ItemPrice']."</p>
             </div>";
         }
     }

     
     ?>
</div>

</body>

<?php
include_once 'HGEfooter.php';

?>
</html>