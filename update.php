<?php
$id=$_POST['id'];
$sname=$_POST['sname'];
$con=new mysqli("localhost","root","","student");
if($con->connect_error){
    die("Not Connected");
}else{
    $sql="update sdetail set sname='$sname' where id='$id'";
    $con->query($sql);
}



?>