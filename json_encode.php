<!-- json encode is convert the php value to the json data-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON encode</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
   <script>
    $(document).ready(function(){
        $.ajax({
           url:"fetch.php",
           type:"POST",
           success:function(data){
               $("#demo").append(data);
           }
        });
    });
   </script> 
   <div id="demo"></div>
</body>
</html>