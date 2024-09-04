<?php
include '../model/mydb.php';


if(isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedpassword=password_hash($_POST["password"], PASSWORD_DEFAULT);
    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->createUser($conobj,"user", $name, $email, $hashedpassword);
    if($result === false){
        echo "error occured while creating user";
    }
    else{
        echo "user created successfully";
    }
    $mydb->closeCon($conobj);

}

?>
