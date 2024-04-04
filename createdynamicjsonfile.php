<?php
$conn=mysqli_connect("localhost","root","","java");
$rs=mysqli_query($conn,"SELECT * FROM ecb");
$output=mysqli_fetch_all($rs,MYSQLI_ASSOC);
$json_data=json_encode($output);
$file_name="my-.json";
if(file_put_contents("json/{$file_name}",$json_data)){
    echo $file_name."File Created";
}
else{
    echo "File can't created";
}
?>