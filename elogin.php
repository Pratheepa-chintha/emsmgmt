<?php
$username=$_REQUEST['t3'];
$password=$_REQUEST['t4'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
$rows=mysqli_query($con,"select count(*) from elogin where username='$username' and passwords='$password'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    header("location:empentry.html"); 
else
    echo"<br><br><center><h1 style='color:voilet'>Invalid Username or password</h1>";
?>