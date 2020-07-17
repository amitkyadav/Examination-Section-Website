<?php
	session_start();
	$con=mysqli_connect("localhost","root","","mmmut") or die("Connection was not established");
	$sid = $_POST['sid'];
	$spassword = $_POST['spassword'];

	$q = "select * from student where sid = '$sid' and spassword = '$spassword' ";
	$result = mysqli_query($con,$q);

	$num = mysqli_num_rows($result);
	if($num==1){
		$_SESSION['sid'] = $sid;
		echo "<script>alert('login successful');</script>";
		echo "<script>window.open('student_result.php','_self');</script>";
	}
	else{
		echo "<script>alert('login unsuccessful');</script>";
		echo "<script>window.open('slogin.php','_self');</script>";
	}

?>