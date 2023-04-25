<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}


mysqli_select_db($con,'form');

$candidate=$_POST['candidate'];
$mno=$_POST['mno'];
$eid=$_POST['eid'];
$mytxt=$_POST['mytxt'];

$query="insert into dataone(candidate,mno,eid,mytxt)
values('$candidate','$mno','$eid','$mytxt')";
echo "$query";
mysqli_query($con,$query);
header('location:main.php');







?>