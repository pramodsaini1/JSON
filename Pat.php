<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Json Data</title>
 </head>
<body>
     
 
Roll.No:<input type="text" id="roll"><br><br>
Name:<input type="text" id="name"><br><br>
Avgr:<input type="text" id="avg"><br><br>
 <button class="insert">Insert</button> 
<div id="demo"></div> 
</body>
<script>
 document.querySelector(".insert").addEventListener("click",function(e){
    var roll=document.getElementById("roll").value;
    var name=document.getElementById("name").value;
    var avg=document.getElementById("avg").value;
    if(roll==""||name==""||avg==""){
       alert("All Field Are Required");
    }
    else{
       const requestUrl="insert_data_json.php";
       const xhr=XMLHttpRequest();
       const data={
           roll:roll,
           name:name,
           avg:avg
       };
        xhr.open("POST",requestUrl)
       xhr.onreadystatechange=function(){
          if(xhr.readyState==4){
            if(xhr.status==200){
               const data=JSON.parse(this.responseText);
               alert(data);
            }
          }
       }
       xhr.send(json.stringify(data));
    }
 })
</script>
</html>