<?php
$username=$_REQUEST['t1'];
$password=$_REQUEST['t2'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
$rows=mysqli_query($con,"select count(*) from alogin where username='$username' and passwords='$password'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    header("location:adminentry.html"); 
else
    echo"<br><br><center><h1 style='color:voilet'>Invalid Username or password</h1>";
?>