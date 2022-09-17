<?
$prefix=$_REQUEST['prefix'];
$firstname=$_REQUEST['first'];
$middlename=$_REQUEST['middle'];
$lastname=$_REQUEST['last'];
$dob=$_REQUEST['dob'];
$phnno=$_REQUEST['number'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['mail'];
$residence=$_REQUEST['residence'];
$city=$_REQUEST['city'];
$states=$_REQUEST['state'];
$pincode=$_REQUEST['pin']
$aadharno=$_REQUEST['aadhar'];
$panno=$_REQUEST['pan'];
$bankacc=$_REQUEST['bank'];
$pfacc=$_REQUEST['pf'];
$branch=$_REQUEST['branch'];
$emptype=$_REQUEST['emptype'];
$designation=$_REQUEST['designation'];
$highestdegree=$_REQUEST['highestdegree'];
$doj=$_REQUEST['doj'];
$jobexperience=$_REQUEST['experience'];
$empid=$_REQUEST['empid'];
$passwords=$_REQUEST['password'];
$empname=$lastname." ".$firstname." ".$middlename;
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if($con->connect_error){
    die("connection failed".$con->connect_error);
  }
  echo"connected successfully";  
$add="INSERT INTO empdata(empid,prefix,empname,dob,phnno,gender,email,residence,city,states,pincode,aadharno,panno,bankacc,pfacc,branch,emptype,designation,highestdegree,doj,jobexperience,passwords) VALUES ('$empid','$prefix','$empname','$dob','$phnno','$gender','$email','$residence','$city','$states','$pincode','$aadharno','$panno','$bankacc','$pfacc','$branch','$emptype','$designation','$highestdegree','$doj','$jobexperience','$passwords')";
if ($conn->query($add) === TRUE)
    echo "New record created successfully";
    header('location:addemp.html');
else
    echo"<br><br><center><h1>New record deos not created </h1>";
?>
<!--<tr><td>Prefix:</td><td><select><option>Mr.</option><option>Ms.</option></select></td><td></td><td></td><td></td><td></td><td></td><td>First Name:</td><td><input type="text" name="t1"></td></tr>
<tr><td>Middle Name:</td><td><input type="text" name="t2"></td><td></td><td></td><td></td><td></td><td></td><td>Last Name:</td><td><input type="text" name="t3"></td></tr>
<tr><td>Date Of Birth:</td><td><input type="date"></td><td></td><td></td><td></td><td></td><td></td><td>PHN.NO:</td><td><input type="tel" pattern="+91-[0-9]{10}"><td></tr>    
<tr><td>Gender:</td><td><select><option>Male</option><option>Female</option><option>Other</option></select></td><td></td><td></td><td></td><td></td><td></td><td>Email-id:</td><td><input type="email" name="t1"></tr>
<tr><td>Address:</td><td><input type="text" name="t4"></td><td></td><td></td><td></td><td></td><td></td><td>City:</td><td><input type="text" name="t5"></tr>
<tr><td>State:</td><td><select><option>Andhra Pradesh</option><option>Telengana</option></select></td><td></td><td></td><td></td><td></td><td></td><td>Pincode:</td><td><input type="text" name="t1"></tr>
<tr><td>Aadhar-No:</td><td><input type="text" name="t6"></td><td></td><td></td><td></td><td></td><td></td><td>Pan.No:</td><td><input type="text" name="t7"></td></tr>
<tr><td>Bank ACC.No:</td><td><input type="text" name="t8"></td><td></td><td></td><td></td><td></td><td></td><td>PF ACC.No:</td><td><input type="text" name="t9"></tr>
-->