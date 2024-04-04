<?php
if(isset($_POST["roll"]) && isset($_POST["name"]) && isset($_POST["avg"])){
     $roll=$_POST["roll"];
     $name=$_POST["name"];
     $avg=$_POST["avg"];

    $data = array(
      'sn' => $roll,
      'name'=>$name,
      'avgr'=>$avg
    );
    $current_data=file_get_contents("json/my-.json");//json data
     $array_data=json_decode($current_data,true);//convert the  json data into the php object or associative array
    $array_data []=$data;
    $json_data=json_encode($array_data,JSON_PRETTY_PRINT);//convert the json format
    if(file_put_contents("json/my-.json",$json_data)){
        echo "success";
    }
    else{
        echo "again";
    }

}
?>