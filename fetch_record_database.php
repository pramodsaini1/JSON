<?php
$conn=mysqli_connect("localhost","root","","myyprofile");
$rs=mysqli_query($conn,"SELECT * FROM customer");
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