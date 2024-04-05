<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Json Data</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
     
 
Roll.No:<input type="text" id="roll"><br><br>
Name:<input type="text" id="name"><br><br>
Avgr:<input type="text" id="avg"><br><br>
<button class="insert">Insert</button>&nbsp;&nbsp;<button class="read">Read Json </button> &nbsp;&nbsp;<button class="encode">Encode</button>&nbsp;&nbsp;<button class="decode">Decode</button>
<script>
     $(document).ready(function(){
        $(".insert").click(function(){
            var roll=$("#roll").val();
            var name=$("#name").val();
            var avg=$("#avg").val();
            if(roll==""||name==""||avg==""){
                alert("All Field Are Required");
            }
            else{
                $.ajax({
                url:"insert_data_json.php",
                type:"POST",
                data:{roll:roll,name:name,avg:avg},
                success:function(data){
                    $("#demo").html("");
                    $("#demo").html(data);
                }
            });
            }
        });
        $(".read").click(function(){
        //    $.getJSON(
        //       "json/data.json",
        //       function(data){
        //         $.each(data,function(key,value){
        //             $("#demo").append(value.sn+" "+value.name+" "+value.avgr+"<br>");
        //         });
        //       }
        //    )
           $.ajax({
             url:"json/data.json",
             type:"GET",
             dataType:"JSON",
             success:function(data){
                $.each(data,function(key,value){
                    $("#demo").append(value.sn+" "+value.name+" "+value.avgr+"<br>");
                })
             }
           });
        });
        $(".encode").click(function(){
            $.ajax({
                url:"encode_fetch_data.php",
                type:"POST",
                success:function(data){
                     $("#demo").html(data);
                }
            })
        })
        $(".decode").click(function(){
            $.ajax({
                url:"decode_fetch_data.php",
                type:"POST",
                success:function(data){
                     $("#demo").append(data);
                }
            })
        })
     });
</script>
<div id="demo"></div> 
</body>
</html>