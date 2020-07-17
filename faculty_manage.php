<?php
session_start();
$con=mysqli_connect("localhost","root","","mmmut") or die("Connection was not established");
$student_id = "";
if(!isset($_SESSION['fid'])){
	echo "<script>window.open('Flogin.php','_self');</script>";
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
        <h1>update marks of the student</h1>
        <form action="" method="post">
          <div class="form_settings">
            <p><span><strong>Student Id</strong></span><input type="text" name="sid" value="" required /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
          </div>
        </form>
        <?php
          if(isset($_POST['submit'])){
            $sid = $_POST['sid'];
            $q = "select * from student where sid ='$sid' ";
            $run_student = mysqli_query($con,$q);
            $num = mysqli_num_rows($run_student);
            if($num==1){
                echo "<script>window.open('faculty_manage.php?student_id=".$sid."','_self');</script>";
            }
            else{
              //echo "<h1>invalid Student Id</h1>";
              echo "<script>alert('invalid Student Id');</script>";
            }
          }
          if(isset($_GET['student_id'])){
            include("update_marks.php");
          }
        ?>
        
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