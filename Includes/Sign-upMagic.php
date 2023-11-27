<?php

if (isset($_POST["submit"])) {

    $first =$_POST['First'];
    $last =$_POST['Last'];
    $email =$_POST['email'];
    $id =$_POST['id'];
    $pass =$_POST['pass'];
    $repass =$_POST['repass'];
    
    require_once './DBHandler.php';
    require_once './Functions.php';


    if (emptyInputSignup($first, $last, $email, $id, $pass, $repass) !== false){
        header("Location: ../HGESignup.php?error=emptyinput"); 
       exit();
    }

    
    if (InvalidUserId($id) !== false){
        header("Location: ../HGESignup.php?error=InvalidId"); 
       exit();
    }

    
    if (InvalidEmail($email) !== false){
        header("Location: ../HGESignup.php?error=InvalidEmail"); 
       exit();
    }

    
    if (PwdMatch($pass, $repass) !== false){
        header("Location: ../HGESignup.php?error=PasswordsDontMatch"); 
       exit();
    }

    
    if (uidExits($connect, $id, $email) !== false){
        header("Location: ../HGESignup.php?error=Usersame/EmailTaken"); 
       exit();
    }

    createuser($connect, $first, $last, $email ,$id, $pass);



}

else {
    header("Location: ../HGEHome.php?error=none"); 
    exit();
}




