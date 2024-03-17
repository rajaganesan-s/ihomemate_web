<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $email=$_GET['email'];
    $password=$_GET['password'];
    $sql="select * from users where email='$email'";
    $result=$con->query($sql);
    $response=new stdClass();
    if($email=="raja@gmail.com"&&$password=="raja@123"){
        $response->message="4";
    }
    else{
        if($result->num_rows>0){
            $response->message="1";//1 for user found
    
            $sql="select * from users where email='$email' AND password='$password'";
            $result=$con->query($sql);
            if($result->num_rows>0){
                $response->message="3";//3 for login successfully
            }
            else{
                $response->message="2";//2 for incorrect username and password
            }
        }
        else{
            $response->message="0";//Username not found
        }
    }
    $encode=json_encode($response,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>