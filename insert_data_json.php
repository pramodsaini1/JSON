<?php
if(isset($_POST["roll"]) && isset($_POST["name"]) && isset($_POST["avg"])){
    $roll=$_POST["roll"];
    $name=$_POST["name"];
    $avg=$_POST["avg"];

    $data=array(
        "sn"=>$roll,
        "name"=>$name,
        "avgr"=>$avg
    );

    $json_string=file_get_contents("json/data.json");
    $json_data=json_decode($json_string,true);
    $json_data []=$data;
    $json_data2=json_encode($json_data,JSON_PRETTY_PRINT);
    $file_name="json/data.json";
    if(file_put_contents($file_name,$json_data2)){
        echo "Data Saved Successfully";
    }
    else{
         echo "Try Again";
    }
}
?>