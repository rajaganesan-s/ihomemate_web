<?php
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $port=$_GET["port"];
    $name=$_GET["name"];
    $dvalue="";
    if($port=="1")
        $dvalue="d1Name";
    else if($port=="2")
        $dvalue="d2Name";
    else if($port=="3")
        $dvalue="d3Name";
    else if($port=="4")
        $dvalue="d4Name";
    $sql="update device_list set $dvalue='$name' where deviceId='$deviceId'";
    $arr=array();
    $count=0;
    $obj=new stdClass();
    if($result=$con->query($sql)){
        $obj->message="1";
    }
    else
        $obj->message="0";
    
    $arr[$count]=$obj;
    $encode=json_encode($obj,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>