<!--- json data is convert into the php object or associative array-->
<?php
  
 $json_string='json/my.json';
 $jsondata=file_get_contents($json_string);
$arr=json_decode($jsondata,true);
// echo"<pre>";
// print_r($arr);
// echo"</pre>";
echo"<table border='1' cellpadding='10px' width='100%'>";
foreach($arr as list("id"=>$id,"name"=>$name,"language"=>$lang,"bio"=>$bio,"version"=>$ver)){
    echo"<tr><td>{$name}</td><td>{$lang}</td><td>{$bio}</td><td>{$ver}</td></tr>";
}
echo"</table>";
 ?>