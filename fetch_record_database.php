<?php
$conn=mysqli_connect("localhost","root","","java");
$rs=mysqli_query($conn,"SELECT * FROM ecb");
$output=mysqli_fetch_all($rs,MYSQLI_ASSOC);
$json_data=json_encode($output,JSON_PRETTY_PRINT);
$file_name="json/pramod.json";
if(file_put_contents($file_name,$json_data)){
    echo "file created";
}
else{
    echo "file not created";
}
?>