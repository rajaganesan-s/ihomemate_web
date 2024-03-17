<?php

header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $email=$_GET['email'];
    $sql="select * from device_list where email='$email'";
    $result=$con->query($sql);
    $arr=array();
    $count=0;
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $obj=new stdClass();
            $obj->deviceId=$row["deviceId"];
            $arr[$count]=$obj;
            $count++;
        }
    }
    else{
        $obj->device=$row["No Data Found"];
        $arr[$count]=$obj;
    }
    $encode=json_encode($arr,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>