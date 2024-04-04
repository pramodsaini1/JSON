<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read JSON Data</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        // Read the json data
        $(document).ready(function(){
            // $.ajax({
            //     url:"https://jsonplaceholder.typicode.com/comments",
            //     type:"GET",
            //     dataType:"JSON",
            //      success:function(data){
            //            $.each(data,function(key,value){
            //                $("#load").append(value.id+" "+value.name+"<br>");
            //            })
            //      }
            // });
            $.getJSON(
                "https://jsonplaceholder.typicode.com/comments",
                function(data){
                    $.each(data,function(key,value){
                        $("#load").append(value.id+" "+value.email+"<br>");
                    });
                }
            );
        });
    </script>
</head>
<body>
<div id="load"></div>
</body>
</html>