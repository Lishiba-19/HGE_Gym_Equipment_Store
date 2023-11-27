<?php
function emptyInputSignup($first, $last, $email, $id, $pass, $repass){
    $result = true || false;
    if(empty($first) || empty($last) || empty($email) || empty($id) || empty($pass) || empty($repass)){
        $result = true;
    }

    else {
        $result = false;
    }

    return  $result;
}

function InvalidUserId($id){
    $result = true || false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $id)) {
        $result = true;
    }

    else {
        $result = false;
    }

    return  $result;
}

function InvalidEmail($email) {
    $result = true || false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }

    else {
        $result = false;
    }

    return  $result;
}


function PwdMatch($pass, $repass) {
    $result = true || false;
    if($pass !== $repass) {
        $result = true;
    }

    else {
        $result = false;
    }

    return  $result;
}

function uidExits($connect, $id, $email) {
 $sql = "SELECT * FROM users WHERE user_uid = ? OR email = ?;";
 $stmt = mysqli_stmt_init($connect);
 if (!mysqli_stmt_prepare($stmt, $sql)){
  
    header("Location: ../HGESignup.php?error=stmtfailed"); 
    exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $id, $email);
 mysqli_stmt_execute($stmt);

 $resultdata = mysqli_stmt_get_result($stmt);

 if ($row = mysqli_fetch_assoc($resultdata)){

    return $row;


 }

 else {
     $result = false;
     return $result;
 }

 mysqli_stmt_close($stmt);

}

function  createuser($connect, $first, $last, $email ,$id, $pass) {


    $sql = "INSERT into users (fname, lname, email, user_uid, user_pass) 
    values (?, ?, ?, ?, ?);";
    

    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sql)){
     
       header("Location: ../HGESignup.php?error=stmtfailed"); 
       exit();
    }
   
//$hashPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email ,$id, $pass);
    mysqli_stmt_execute($stmt);
   
    mysqli_stmt_close($stmt);
    header("Location: ../HGESignup.php?error=none"); 
    exit();
}

function emptyInputLogin($id, $pass){
    $result = true || false;
    if(empty($id) || empty($pass)){
        $result = true;
    }

    else {
        $result = false;
    }

    return  $result;
}

function loginuser($connect, $id, $pass) {
    $uidExists = uidExits($connect, $id, $id);

    
    if($uidExists === false) {
        header("location: ../HGELogin.php?error=wronglogin");
        exit();
    }

    $passHashed = $uidExists["user_pass"];
    $checkPass = password_verify($pass, $passHashed);

    if($checkPass === false){
       
        header("location: ../HGELogin.php?error=wronglogin");
        exit();
    }

    else if($checkPass === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["user_id"];
        $_SESSION["useruid"] = $uidExists["user_uid"];
        header("location: ../HGEHome.php");
        exit();
    }
}

function loginuser2($connect, $id, $pass) {
    $uidExists = uidExits($connect, $id, $id);

    
    if($uidExists === false) {
        header("location: ../HGELogin.php?error=wronglogin");
        exit();
    }


    $query = "SELECT * FROM users where user_uid = '$id' and user_pass='$pass';";
    $result=mysqli_query($connect,$query);
    $count= mysqli_num_rows($result);

  
    if($count === 1){
        session_start();
        $_SESSION["userid"] = $result['user_id'];
        $_SESSION["userUid"] = $result["user_uid"];
        header("location: ./HGEHome.php");
        exit();
    }

    else{
        header("location: ../HGELogin.php?error=wronglogin");
        exit();
    }
    
}

function  createMessage($connect, $Fname, $mailFrom, $subject ,$message) {


    $sql = "INSERT into msgs (msgid, fullname, email, msgs) 
    values (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sql)){
     
       header("Location: ../HGESignup.php?error=stmtfailed"); 
       exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $Fname, $mailFrom, $subject ,$message);
    mysqli_stmt_execute($stmt);
   
    mysqli_stmt_close($stmt);
    header("Location: ../Contact.php?error=none"); 
    exit();
}

function getData($connect){
    $sql = "SELECT * FROM gallery";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}
