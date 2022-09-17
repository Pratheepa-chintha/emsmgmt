<?php
$empid=$_REQUEST['empid'];
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if(isset($_POST['delete']))
{
    if($empid==empid){
        $row=mysqli_query($con,"DELETE * FROM empdata WHERE empid='$empid'");
        echo $empid."RECORD DELETED SUCCESSFULLY.";
    }
}
else{
    echo $empid."RECORD DOES NOT DELETED SUCCESSFULLY.";
}
?>
