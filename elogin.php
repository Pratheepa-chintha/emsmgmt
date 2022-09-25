<?php
$username=$_REQUEST['t1'];
$password=$_REQUEST['t2'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
$rows=mysqli_query($con,"select count(*) from elogin where username='$username' and password='$password'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    header("location:empentry.html"); 
else
    echo"<br><br><center><h1 style='color:voilet'>Invalid Username or password</h1>";
?>