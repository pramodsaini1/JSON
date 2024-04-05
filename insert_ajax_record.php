<?php
$roll=$_POST["roll"];
$name=$_POST["name"];
$avg=$_POST["avg"];
$conn=mysqli_connect("localhost","root","","java");
$stmt=$conn->prepare("INSERT INTO ecb VALUES(?,?,?)");
$stmt->bind_param("sss",$roll,$name,$avg);
if($stmt->execute()){
    echo"success";
}
else{
    echo"Again";
}
?>