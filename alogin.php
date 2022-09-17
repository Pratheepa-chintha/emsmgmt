<?php
//$servername="localhost";
//$database="emsdb";
//$username="username";
//$password="password";
$username=$_REQUEST['t1'];
$password=$_REQUEST['t2'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
//$conn=mysqli_connect($servername,$username,$password,$database);
$rows=mysqli_query($con,"select count(*) from credentials where username='$username' and password='$password'");
$row=mysqli_fetch_row($rows);
$n=$row[0];
if($n==1)
    header("location:adminentry.html"); 
else
    echo"<br><br><center><h1 style='color:voilet'>Invalid Username or password</h1>";
?>
