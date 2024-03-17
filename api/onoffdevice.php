<?php
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $port=$_GET["port"];
    $status=$_GET["status"];
    $dvalue="";
    if($port=="1")
        $dvalue="d1Value";
    else if($port=="2")
        $dvalue="d2Value";
    else if($port=="3")
        $dvalue="d3Value";
    else if($port=="4")
        $dvalue="d4Value";
    $sql="update device_list set $dvalue='$status' where deviceId='$deviceId'";
    $arr=array();
    $count=0;
    $obj=new stdClass();
    if($result=$con->query($sql)){
        $obj->message="1";
        $sql="select d".$port."Name as Name from device_list where deviceId='$deviceId'";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
        $name=$row['Name'];
        // Set the Indian time zone
        date_default_timezone_set('Asia/Kolkata');
        // Get the current date and time
        $currentDateTime = date('d/m/Y H:i');
        // $currentTime = date('H:i a');
        $sql="INSERT INTO `history` (`deviceId`, `dName`, `dValue`, `datetime`) VALUES ('$deviceId', '$name', '$status', '$currentDateTime');";
        $con->query($sql);
        
    }
    else
        $obj->message="0";
    
    $arr[$count]=$obj;
    $encode=json_encode($obj,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>