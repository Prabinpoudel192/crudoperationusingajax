<?php
 $id=$_POST['id'];
 $name=$_POST['sname'];
 $con=new mysqli("localhost","root","","student");
 if($con->connect_error){
    die("not connection");
 }else{
    $sql="insert into sdetail(id,sname)values('$id','$name')";
    $con->query($sql);
 }
?>