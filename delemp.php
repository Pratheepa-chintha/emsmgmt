<?php
$empid=$_REQUEST['empid'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
$rows=mysqli_query($con,"select * from empdata where empid='$empid'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    echo"RECORD DELETED SUCCESSFULLY";
else
    echo"RECORD DOES NOT DELETED";
?>