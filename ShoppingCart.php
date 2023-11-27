<?php

include_once 'HGEHeader.php';
include './Includes/Functions.php';


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
<div class="cart-area">
    <br>
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

<div class="MyCart">
    <h5>My Cart</h5>
    <form action="./ShoppingCart.php" method="GET" class="cart-items">

    <?php

    if (isset($_SESSION['Cart'])){
    $equipment_id = array_column($_SESSION['Cart'], 'equipment_id');

    $result = getData($connect);
    $Total = 0;
    while ($row = mysqli_fetch_assoc($result)){
        foreach ($equipment_id as $id){
            if($row['equipment_id'] == $id){
               
                echo "
                
                <div class='In-Cart'>
                <form action='./ShoppingCart.php?action=clearall method='GET'>
                <h3>".$row['equipment_name']."</h3>
                <img src=".$row['equipment_image'].">
                <h3>".$row['equipment_price']."</h3>
                <a href='./Shoppingcart.php?action=clear'><button type='submit' name='remove' value=$id class='remove-Btn'>Remove</button></a>
                </form>
                </div>";
                if(isset($_GET['remove'])){
                    if($_POST[$row['equipment_id']]== $_GET[$id]){

                   foreach($_SESSION['Cart'] as $key => $value){
                      if($value[$row['equipment_id']] == $_GET["$id"]){
                         unset($_SESSION['Cart'][$key]);
                            echo "<script>alert('Item has been removed from cart.')</script>";
                            echo "<script>window.location = 'ShoppingCart.php'</script>";
                        }
                    }
                }
            
                }
               
              
                
            
                $Total = $Total + (int)$row['equipment_price'];
       
            }

        
        }
        
    }  
   

   
  //  }

}


    
    ?>
        
    </form>
</div>

<div class="prices">
    <?php

    if(isset($_SESSION['Cart'])){
        $count = count($_SESSION['Cart']);

        echo "<h4>Price ($count Items)</h4>";
        echo "K$Total<br>";
        echo "<form action='./ShoppingCart.php?action=clearall method='GET'>
        <a href='./checkout.php'>Check Out</a>
        </form>";
     
    }else{
        echo
        "<h4>Price (0 Items)</h4>";
    }

    ?>
</div>

</body>


<?php
include_once 'HGEFooter.php'
?>
</html>