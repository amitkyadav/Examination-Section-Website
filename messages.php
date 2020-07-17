<?php
  session_start();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $enquiry = $_POST['enquiry'];

 if($name==null || $email==null || $enquiry==null){
 	echo "<script type='text/javascript'>alert('enter data correctly');</script>";
 }
 else{
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'mmmut');
  $q = "insert into message (name,email,kathan) values ('$name','$email','$enquiry')";
  mysqli_query($con,$q);
  echo "<script>alert('thanks for contacting us.');</script>";
}
?>