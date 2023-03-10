
<?php
error_reporting(0);
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if($con->connect_error){
    die("connection failed".$con->connect_error);
  }
else{
  echo"connected successfully";
}
       
if(isset($_POST["add"])){
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
        $states=$_POST['states'];
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
        
        $add="INSERT INTO empdata(empid,prefix,empname,dob,phnno,gender,email,residence,city,states,pincode,aadharno,panno,bankacc,pfacc,branch,emptype,designation,highestdegree,doj,jobexperience,photo,passwords) VALUES ('$empid','$prefix','$empname','$dob','$phnno','$gender','$email','$residence','$city','$states','$pincode','$aadharno','$panno','$bankacc','$pfacc','$branch','$emptype','$designation','$highestdegree','$doj','$jobexperience','$photo','$passwords')";
        #$run=mysqli_query($con,$add);
        if(mysqli_query($con,$add)){
        echo"NEW RECOED CREATED SUCCESSFULLY";
        }
        else{
            echo"RECORD DOES NOT CREATED";
        }
}
   
?>


