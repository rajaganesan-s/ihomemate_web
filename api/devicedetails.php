<?php
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $sql="select * from device_list where deviceId='$deviceId'";
    $result=$con->query($sql);
    $arr=array();
    $count=0;
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $obj=new stdClass();
            $obj->port="1";
            $obj->dName=$row["d1Name"];
            $obj->dValue=$row["d1Value"];
            $arr[0]=$obj;
            $obj=new stdClass();
            $obj->port="2";
            $obj->dName=$row["d2Name"];
            $obj->dValue=$row["d2Value"];
            $arr[1]=$obj;
            $obj=new stdClass();
            $obj->port="3";
            $obj->dName=$row["d3Name"];
            $obj->dValue=$row["d3Value"];
            $arr[2]=$obj;
            $obj=new stdClass();
            $obj->port="4";
            $obj->dName=$row["d4Name"];
            $obj->dValue=$row["d4Value"];
            $arr[3]=$obj;
        }
    }
    else{
        $obj->d1Name=$row["No Data Found"];
        $arr[$count]=$obj;
    }
    $encode=json_encode($arr,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>