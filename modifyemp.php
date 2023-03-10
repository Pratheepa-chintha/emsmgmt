<?php 
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if($con->connect_error){
   die("connection failed".$con->connect_error);
 }
else{
 echo"connected successfully";
}
if(isset($_POST["modify"])){
$empid=['empid'];
// $sql = 'SELECT empid,prefix,empname,dob,phnno,gender,email,residence,city,states,pincode,aadharno,panno,bankacc,pfacc,branch,emptype,designation,highestdegree,doj,jobexperience,passwords FROM empdata WHERE empid==$empid ';
$sql = "SELECT * FROM `empdata` WHERE `empid` LIKE '$empid'";

//mysqli_select_db('empdata');
$result = $con->query( $sql );
if($result->num_rows>0){
   while($row = mysqli_fetch_array($res)) {
      echo "EMP ID :{$row['empid']}  <br> ".
         "PREFIX :{$row['prefix']} <br>".
         "EMP NAME : {$row['empname']} <br> ".
         "DATE OF BIRTH : {$row['dob']} <br> ".
         "PHONE NO : {$row['phnno']} <br> ".
         "GENDER : {$row['gender']} <br> ".
         "EMAIL : {$row['email']} <br> ".
         "RESIDENCE : {$row['residence']} <br> ".
         "CITY : {$row['city']} <br> ".
         "STATE : {$row['states']} <br> ".
         "PINCODE : {$row['pincode']} <br> ".
         "AADHAR NO : {$row['aadharno']} <br> ".
         "PAN NO : {$row['panno']} <br> ".
         "BANK ACC : {$row['bankacc']} <br> ".
         "PF ACC : {$row['pfacc']} <br> ".
         "BRANCH : {$row['branch']} <br> ".
         "EMPLOYEE TYPE : {$row['emptype']} <br> ".
         "DESIGNATION : {$row['designation']} <br> ".
         "HIGHEST QUALIFICATION: {$row['highestdegree']} <br> ".
         "DATE OF JOINING : {$row['doj']} <br> ".
         "EXPERIENCE : {$row['jobexperience']} <br> ".
         "PASSWORD : {$row['passwords']} <br> ".
         "--------------------------------<br>";
   }
   }
}
?>