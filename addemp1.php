

<!--<tr><td>Prefix:</td><td><select><option>Mr.</option><option>Ms.</option></select></td><td></td><td></td><td></td><td></td><td></td><td>First Name:</td><td><input type="text" name="t1"></td></tr>
<tr><td>Middle Name:</td><td><input type="text" name="t2"></td><td></td><td></td><td></td><td></td><td></td><td>Last Name:</td><td><input type="text" name="t3"></td></tr>
<tr><td>Date Of Birth:</td><td><input type="date"></td><td></td><td></td><td></td><td></td><td></td><td>PHN.NO:</td><td><input type="tel" pattern="+91-[0-9]{10}"><td></tr>    
<tr><td>Gender:</td><td><select><option>Male</option><option>Female</option><option>Other</option></select></td><td></td><td></td><td></td><td></td><td></td><td>Email-id:</td><td><input type="email" name="t1"></tr>
<tr><td>Address:</td><td><input type="text" name="t4"></td><td></td><td></td><td></td><td></td><td></td><td>City:</td><td><input type="text" name="t5"></tr>
<tr><td>State:</td><td><select><option>Andhra Pradesh</option><option>Telengana</option></select></td><td></td><td></td><td></td><td></td><td></td><td>Pincode:</td><td><input type="text" name="t1"></tr>
<tr><td>Aadhar-No:</td><td><input type="text" name="t6"></td><td></td><td></td><td></td><td></td><td></td><td>Pan.No:</td><td><input type="text" name="t7"></td></tr>
<tr><td>Bank ACC.No:</td><td><input type="text" name="t8"></td><td></td><td></td><td></td><td></td><td></td><td>PF ACC.No:</td><td><input type="text" name="t9"></tr>
-->
<?php
error_reporting(0);
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if($con->connect_error){
    die("connection failed".$con->connect_error);
  }
else{
  echo"connected successfully";
}
        $prefix=$_POST['prefix'];
        $firstname=$_POST['first'];
        $lastname=$_POST['last'];
        $empname=$lastname." ".$firstname;
        $dob=$_POST['dob'];
        $phnno=$_POST['number']; 
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $residence=$_POST['residence'];
        $city=$_POST['city'];
        $states=$_POST['state'];
        $pincode=$_POST['pin'];
        $aadharno=$_POST['aadhar'];
        $panno=$_POST['pan'];
        $bankacc=$_POST['bank'];
        $pfacc=$_POST['pf'];
        $branch=$_POST['branch'];
        $emptype=$_POST['emptype'];
        $designation=$_POST['designation'];
        $highestdegree=$_POST['highestdegree'];
        $doj=$_POST['doj'];
        $jobexperience=$_POST['experience'];
        $photo=$_POST['photo'];
        $empid=$_POST['empid'];
        $passwords=$_POST['password'];
        $add="INSERT INTO empdata(empid,prefix,empname,dob,phnno,gender,email,residence,city,states,pincode,aadharno,panno,bankacc,pfacc,branch,emptype,designation,highestdegree,doj,jobexperience,passwords,photo) VALUES ('$empid','$prefix','$empname','$dob','$phnno','$gender','$email','$residence','$city','$states','$pincode','$aadharno','$panno','$bankacc','$pfacc','$branch','$emptype','$designation','$highestdegree','$doj','$jobexperience','$passwords','$photo')";
        $run=mysqli_query($con,$add);
        if($add){
            echo"NEW RECOED CREATED SUCCESSFULLY";
        }
        else{
            echo"RECORD DOES NOT CREATED";
        }
   
?>
