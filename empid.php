<?php
//function cse($empid)
$con=mysqli_connect("localhost:3306","root"," ","emsdb");
if($con->connect_error){
  die("connection failed".$con->connect_error);
}
echo"connected successfully";
$empid=mysqli_query($con,'SELECT * from empdata ORDER BY empid DESC LIMIT 1');
if($empid==NULL){
  if(isset($_POST['generate']))
      $empid='cse000';
      $int_emp=intval($empid);
      for($i=$empid;$i<$int_emp+1;$i++){
        echo "$i";
  }
}
else{
  $int_emp=intval($empid);
  for($i=$empid;$i<$int_emp+1;$i++){
    if(isset($_POST['generate']))
      echo "$i";
}
}
//for($id=$empid;$id<$empid+1;$id++){
  //  $empid=$empid+$id;
    //$id=$str.$empid;
    //f1.tt.value=sprintf("%02d",$id);
    //}

//var val=000; 
//var str='cse';
//for(var i=val; i<val+1; i++)   
//{
  //  val=val+i;
    //id=str.concat("%02d",val);
    //f1.t1.value=id;
?>