<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Insert Data</title>
</head>
<body>
    <form id="insertRecord">
  Roll.No:<input type="text" id="roll" name="roll"><br><br>
  Name:<input type="text" id="name"  name="name"><br><br>
  Avg:<input type="text" id="avg"  name="avg"><br><br>
  <button class="insert">Insert</button>
</form>
  <div id="demo"></div>  
</body>
<script>
document.querySelector(".insert").addEventListener("click",function(e){
    e.preventDefault();
     
    var form=document.getElementById("insertRecord");
    var formdata=new FormData(form);
    var xhr=new XMLHttpRequest();
    xhr.open("POST","insert_ajax_record.php");
    xhr.onreadystatechange=function(){
        if(xhr.readyState==4){
            if(this.responseText=="success"){
                 document.getElementById("demo").innerHTML=this.responseText;
            }
        }
    }
    xhr.send(formdata);

     
})
</script>
</html>