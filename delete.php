<?php
$id=$_POST['id'];
$con=new mysqli("localhost","root","","student");
if($con->connect_error){
    die("Not connected");
}else{
    $sql="delete from sdetail where id='$id'";
    $con->query($sql);
}


?>