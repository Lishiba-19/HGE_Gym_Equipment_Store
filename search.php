<?php
include_once 'HGEHeader.php';

?>

<body>
<div class="second-equipment">
    <?php
if (isset($_SESSION["userid"])){
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($connect, $_POST['search']);
        $sql = "SELECT * FROM items WHERE ItemName LIKE '%$search%' OR ItemPrice LIKE '%$search%'";

        $result = mysqli_query($connect, $sql);
        $queryResults = mysqli_num_rows($result);

        echo "There are ".$queryResults." result(s)!";

        if ($queryResults > 0) {

            while($row = mysqli_fetch_assoc($result)){
                echo "
                <div class='second-hand-equip'>
                <a href='secondhand.php?'><h3>".$row['ItemName']."</h3>
                <img src=".$row['ItemImage'].">
                <p>K".$row['ItemPrice']."</p>
                </a>
                </div>";
            }

        }

        else {
            echo "Results do not match search!";
        }
    }

}

else {
    header("location: ./HGEHome.php");
    exit();
}

    ?>
    
</div>
</body>