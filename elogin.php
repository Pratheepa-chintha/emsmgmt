<?php
//$servername="localhost";
//$database="database";
//$username="username";
//$password="password";
$username=$_REQUEST['t3'];
$password=$_REQUEST['t4'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
//$conn=mysqli_connect($servername,$username,$password,$database);
$rows=mysqli_query($con,"select count(*) from emsdb where username='$username' and password='$password'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    header("location:empentry.html"); 
else
    echo"<br><br><center><h1 style='color:voilet'>Invalid Useername or password</h1>";
?>