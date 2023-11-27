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

<?php


?>

<form action="./Includes/upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
</form>

</body>

<?php
include_once 'HGEfooter.php';

?>
</html>