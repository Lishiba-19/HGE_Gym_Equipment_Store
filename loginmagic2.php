<?php
include './Includes/DBHandler.php';

if (isset($_POST["submit"])) {

    $id =$_POST['id'];
    $pass =$_POST['pass'];
    
    $query = "SELECT * FROM users where user_uid = '$id' and user_pass='$pass';";
    $result=mysqli_query($connect,$query);
    $count= mysqli_num_rows($result);
    

  
    if($count > 0){
        session_start();
        $_SESSION["userid"] = ["user_id"];
        $_SESSION["useruid"] = ["user_uid"];
        header("location: ./HGEHome.php");
        exit();
    }

    else{


        $_SESSION['login_attempts'] = 1;
        header("location: ./HGELogin.php?error=wronglogin");
        exit();
    }
    





}