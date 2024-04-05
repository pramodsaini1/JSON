<?php
$conn=mysqli_connect("localhost","root","","java");
 $rs=mysqli_query("SELECT * FROM ecb");
 $output=mysqli_fetch_All($rs,MYSQLI_ASSOC);
 echo"<pre>";
 print_r($output);
 echo"</pre>";
 
?>