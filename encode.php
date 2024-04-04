 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Encode Create Dynamic Json File</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
 </head>
 <body>
<div id="demo"></div>
<script>
$(document).ready(function(){
   $.ajax({
      url:"encode_fetch_data.php",
      type:"POST",
      success:function(data){
          $("#demo").html(data);
      }
   });
});
</script>
 </body>
 </html>