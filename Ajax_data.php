<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Change the content</title>
</head>
<body>
<div id="demo">
    <p>Hello</p>
</div> 
<button class="show">Change content</button>
</body>
<script>
document.querySelector(".show").addEventListener("click",function(){
     const xhr=new XMLHttpRequest();
     xhr.open("GET","get_record.php");
     xhr.onreadystatechange=function(){
        if(xhr.readyState==4){
            document.getElementById("demo").innerHTML=this.responseText;
        }
     }
     xhr.send();
})
</script>
</html>