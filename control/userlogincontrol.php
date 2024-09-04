<?php
session_start();
include '../model/mydb.php';

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->login($conobj,"user",$email);
    if($result->num_rows > 0){
        $data=$result->fetch_assoc();
        if(password_verify($password,$data["password"])){
       $_SESSION["email"] = $email;
       header("Location: ../view/userprofile.php");
        }
        else{
            echo "wrong password";
        }
    }
    else{
        echo "user not found";
    }
}

?>
