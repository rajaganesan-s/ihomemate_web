<?php
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $email=$_GET['email'];
    $password=$_GET['password'];
    //$sql="select * from users where username='$name' AND password='$password'";
    $sql="select * from users where email='$email'";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $response->message="0";//0 for already registered
    }
    else{
        $sql="insert into users(email,password) values('$email','$password');";
        if($con->query($sql)){
            $response->message="1";//New user registered successfully
        }
    }
    $encode=json_encode($response,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>
