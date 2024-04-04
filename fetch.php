<?php
$conn=mysqli_connect("localhost","root","","video");
$rs=mysqli_query($conn,"SELECT * FROM comment");
$output=mysqli_fetch_all($rs,MYSQLI_ASSOC);//number of rows in the associative array
echo"<pre>";
 echo json_encode($output);
 echo"</pre>";
?>