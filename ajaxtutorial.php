<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="document.css">
    <script src="jquery.js"></script>
    <title>Ajax Tutorial</title>
</head>
<body>
    <div id="insert">
        id: <input type="text" id="pra">
        Name:<input type="text" id="pra1">
        <button id="pra2">INSERT</button>
    </div>
    <div id="delete">
        id: <input type="text" id="pra3">
       <button id="pra4">DELETE</button>
    </div>
    <div id="update">
        id:<input type="text" id="pra5">
        Name:<input type="text" id="pra6">
        <button id="pra7">Update</button>
    </div>
    <div id="search">
        <input type="search"  id="pra8">
    </div>
    <table id="display" border='1'><tr><th>ID</th><th>NAME</th></tr><tr><td>Apple</td><td>Ball</td></tr></table>
    <script>
    $(document).ready(function(){
     function refresh(){$.ajax({
      url:"display.php",
      type:"post",
      success:function(data){
        $("#display").html(data);
      }
     });
    }
    refresh();
    $("#pra2").on("click",function(){
      let a=$("#pra").val();
      let b=$("#pra1").val();  
     $.ajax({
      url:"insert.php",
      type:"post",
      data:{id:a,sname:b},
      success:function(){
        refresh();
        $("#pra").val("");
        $("#pra1").val("");
      }
     });
    });
    $("#pra4").on("click",function(){
      let a=$("#pra3").val(); 
     $.ajax({
      url:"delete.php",
      type:"post",
      data:{id:a},
      success:function(){
        refresh();
        $("#pra3").val("");
      }
     });
    });
    //update operation
    $("#pra7").on("click",function(){
      let a=$("#pra5").val();
      let b=$("#pra6").val();  
     $.ajax({
      url:"update.php",
      type:"post",
      data:{id:a,sname:b},
      success:function(){
        refresh();
        $("#pra5").val("");
        $("#pra6").val("");
      }
     });
    });
    //Search Operation
    $("#pra8").on("keyup",function(){
      let a=$(this).val();
     $.ajax({
      url:"search.php",
      type:"post",
      data:{sname:a},
      success:function(data){
        $("#display").html(data);
      }
     });
    });
    });

    </script>
    
</body>
</html>