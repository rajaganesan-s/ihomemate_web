<?php

header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $sql="select * from history where deviceId='$deviceId' ORDER BY id DESC LIMIT 100";
    $result=$con->query($sql);
    $arr=array();
    $count=0;
    $response=new stdClass();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $obj=new stdClass();
            $obj->dName=$row["dName"];
            $obj->dValue=$row["dValue"];
            $obj->datetime=$row["datetime"];
            $arr[$count]=$obj;
            $count++;
        }
        $response->status="success";
        $response->data=$arr;
    }
    else{
        $response->status="failure";
        $response->data="No Data Found";
    }
    $encode=json_encode($response,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>