<?php


class mydb{
public  $DBHostName="";
public $DBUserName="";
public $DBPassword="";
public $DBName="";
function __construct(){
 $this->DBHostName="localhost";
 $this->DBUserName="root";
 $this->DBPassword="";
 $this->DBName="mydb";
}

function createConObject(){
    return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, 
    $this->DBName);
}

function insertOrder($conn,$table,$email, $password, $filename,$product, $quantity ){
$qrystring="INSERT INTO $table (email, password, filename, product, quantity) 
VALUES ('$email', '$password', '$filename', '$product', $quantity)";
$result = $conn->query($qrystring);
if($result === false)
{
    return $conn->error;
}
else{
    return $result;
}
}
function showOrderById($conn,$table,$orderid){
    $qrystring="SELECT * FROM $table WHERE id = '$orderid'";
    $result= $conn->query($qrystring);
    return $result;
}
function updateOrder($conn,$table,$orderid,$quantity){
  
    $qrystring="UPDATE $table SET quantity = '$quantity' WHERE id='$orderid'";
    $result= $conn->query($qrystring);
    return $result;
}
function createUser($conn,$table, $name, $email, $password){
    $querystring="INSERT INTO $table (name,email, password) VALUES ('$name','$email', '$password')";
    $result=$conn->query($querystring);
    return $result;
}
function login($conn,$table,$email){
    $querystring="SELECT * FROM $table WHERE email = '$email'";
    $result=$conn->query($querystring);
    return $result;
}



function closeCon($conn)
{
 $conn->close();
}

}




?>