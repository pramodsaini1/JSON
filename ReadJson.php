<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Json Data</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
           $.ajax({
             url:"json/my-.json",
             type:"GET",
             dataType:"JSON",
             success:function(data){
                $.each(data,function(key,value){
                   $("#demo").append(value.sn+" "+value.name+" "+value.avgr+"<br>");
                });
             }
           });
        });
    </script>
<div id="demo"></div> 
</body>
</html>