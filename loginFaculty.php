<?php
  session_start();
  $fid = $_POST['fid'];
  $fpassword = $_POST['fpassword'];

  $con=mysqli_connect("localhost","root","","mmmut") or die("Connection was not established");
  $q = "select * from faculty where fid='$fid' and fpassword='$fpassword'";
  $run_faculty=mysqli_query($con,$q);
  $num=mysqli_num_rows($run_faculty);
  if ($num == 1) {
    $_SESSION['fid']=$fid;
    echo "<script>alert('login successful');</script>";
    echo "<script>window.open('faculty_manage.php','_self');</script>";
  } 
  else{
    echo "<script>alert('login unsuccessful');</script>";
    echo "<script>window.open('Flogin.php','_self');</script>";
  }

?>