<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Insert Data into the json file</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-12" id="demo"></div>
    <div class="row">
        <div class="col-sm-12">
            Roll.No:<input type="text" id="roll"><br><br>
            Name:<input type="text" id="name"><br><br>
            Avgr:<input type="text" id="avg"><br><br>
            <button class="btn btn-success">Submit</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
       $(".btn.btn-success").click(function(){
            var roll=$("#roll").val();
            var name=$("#name").val();
            var avg=$("#avg").val();
            $.ajax({
              url:"insert_record_json.php",
              type:"POST",
              data:{roll:roll,name:name,avg:avg},
              success:function(data){
                  alert(data);
              } 
            });
            
       });
    });
</script>  
</body>
</html>