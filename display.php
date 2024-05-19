<?php
$con=new mysqli("localhost","root","","student");
if($con->connect_error){
    die("Not connected");
}else{
    $sql="select *from sdetail";
    $r=$con->query($sql);
    if($r>0){
        echo "<table id='display'><tr><th>ID</th><th>NAME</th></tr>";
        while($row=$r->fetch_assoc()){
            $id=$row['id'];
            $name=$row['sname'];
            echo "<tr><td>$id</td><td>$name</td></tr>";
        }
    }
}

?>