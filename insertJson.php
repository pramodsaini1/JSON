<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Json Data</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
     
<div id="demo"></div> 
Roll.No:<input type="text" id="roll"><br><br>
Name:<input type="text" id="name"><br><br>
Avgr:<input type="text" id="avg"><br><br>
<button class="submit">Submit</button>
<script>
     $(document).ready(function(){
        $(".submit").click(function(){
            var roll=$("#roll").val();
            var name=$("#name").val();
            var avg=$("#avg").val();
            $.ajax({
                url:"insert_data_json.php",
                type:"POST",
                data:{roll:roll,name:name,avg:avg},
                success:function(data){
                    $("#demo").html(data);
                }
            });
        });
     });
</script>
</body>
</html>