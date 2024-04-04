<?php
$json_string=file_get_contents("json/pramod.json");
$json_data=json_decode($json_string,true);
 echo"<pre>";
 print_r($json_data);
 echo"</pre>";
?>