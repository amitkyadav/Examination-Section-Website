<?php
session_start();
$con=mysqli_connect("localhost","root","","mmmut") or die("Connection was not established");
if(!isset($_SESSION['sid'])){
	echo "<script>window.open('Slogin.php','_self');</script>";
}
else{
?>
<!DOCTYPE HTML>
<html>
<!-- student login -->
<head>
  <title>MMMUT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><img style="height: 100px;width: 100px;float: left;padding-right: 20px;" src="style/mmm.png"><a href="index.html">MMMUT<span class="logo_colour">_EXAMINATION SECTION</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="Slogin.php">Student Login</a></li>
          <li><a href="Flogin.php">Faculty Login</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"><center><a href="logout.php">Logout</a></center></center></div>
          <div class="sidebar_item">
            <h3>Notifications : </h3>
            <h4></h4>
            <h5>April 16th, 2018</h5>
            <p>Even semester major examination is staring . be prepared !<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="http://172.16.1.250:8081/jasperserver/login.html">result (2017-18) Btech,Mba,Mca</a></li>
              <li><a href="https://onedrive.live.com/?v=error&type=linknotsupported">Format for new syllabus</a></li>
              <li><a href="https://onedrive.live.com/redir?resid=5F8E7384DE970738!807&authkey=!ACW2yiZ1HX11Gsg&ithint=folder%2c">old question papers</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <?php
        	$sid = $_SESSION['sid'];
        	$q = "select * from student where sid ='$sid' ";
        	$run_student = mysqli_query($con,$q);
        	$get_student = mysqli_fetch_array($run_student);
        	$name = $get_student['sname'];
        	$dept = $get_student['sdept'];
        ?>
        <h1>hi! <?php echo $name; ?></h1>
        <h1><strong>branch :</strong> <?php echo $dept; ?></h1>
        <h1><strong>roll no :</strong> <?php echo $sid; ?></h1>
        <h1><center>your result</center></h1>
        <table width="100%">
        	<tr>
        		<th>Sub Code</th>
        		<th>Subject</th>
        		<th>Sessional Marks</th>
        		<th>Major Marks</th>
        		<th>Practical/Other Marks</th>
        	</tr>
        	<?php
        		$sel_sub = "select * from subject";
        		$run_sub = mysqli_query($con,$sel_sub);
        		while($get_sub = mysqli_fetch_array($run_sub)){
        			$sub_id = $get_sub['sub_id'];
        			$sub_name = $get_sub['sub_name'];
              $sel_marks = "select * from marks where sub_id='$sub_id' and sid='$sid' ";
              $run_marks = mysqli_query($con,$sel_marks);
              $get_marks = mysqli_fetch_array($run_marks);
              $sessional_mark = $get_marks['sessional_mark'];
              $major_mark = $get_marks['major_mark'];
              $practical_mark = $get_marks['practical_mark'];
        	?>
        	<tr>
        		<td><?php echo $sub_id; ?></td>
        		<td><?php echo $sub_name; ?></td>
        		<td><?php echo $sessional_mark; ?></td>
        		<td><?php echo $major_mark; ?></td>
        		<td><?php echo $practical_mark; ?></td>
        	</tr>
        	<?php } ?>
        </table>
        <h2>Semester total credit : 25</h2>
        <h2>SGPA : </h2>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="Slogin.php">Student Login</a> | <a href="Flogin.php">Faculty Login</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; MMMUT </p>
    </div>
  </div>
</body>
</html>


<?php } ?>