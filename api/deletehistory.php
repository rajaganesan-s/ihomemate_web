<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $sql="DELETE FROM history WHERE deviceId='$deviceId'";
    $response=new stdClass();
    if($con->query($sql)){
        $response->message="1";
    }
    else{
        $response->message="0";
    }
    $encode=json_encode($response,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>