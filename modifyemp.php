<?php 
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
$sql = 'SELECT empid,prefix,empname,dob,phnno,gender,email,residence,city,states,pincode,aadharno,panno,bankacc,pfacc,branch,emptype,designation,highestdegree,doj,jobexperience,passwords FROM empdata';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }