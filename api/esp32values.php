<?php
    error_reporting(0);
    $con=new mysqli('localhost','id21987266_ihomemate','Ihomemate@123','id21987266_ihomemate');
    $deviceId=$_GET['deviceId'];
    $sql="select * from device_list where deviceId='$deviceId'";
    $result=$con->query($sql);
    $arr=array();
    $count=0;
    $obj=new stdClass();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $value=$row["d1Value"];
            if($value=="1")
                $value="1";
            else
                $value="0";
            $obj->d1Value=$value;
            $value=$row["d2Value"];
            if($value=="1")
                $value="1";
            else
                $value="0";
            $obj->d2Value=$value;
            $value=$row["d3Value"];
            if($value=="1")
                $value="1";
            else
                $value="0";
            $obj->d3Value=$value;
            $value=$row["d4Value"];
            if($value=="1")
                $value="1";
            else
                $value="0";
            $obj->d4Value=$value;
            //$obj->d3Value=$row["d3Value"];
            //$obj->d4Value=$row["d4Value"];
            $arr[$count]=$obj;
        }
    }
    else{
        $obj->d1Value="No Data Found";
        $arr[$count]=$obj;
    }
    $encode=json_encode($arr,JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    echo $encode;
?>