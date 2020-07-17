<?php
$sid = $_GET['student_id'];
$query = "select * from student where sid ='$sid' ";
$run_student = mysqli_query($con,$query);
$get_student = mysqli_fetch_array($run_student);
$sname = $get_student['sname'];
$sdept = $get_student['sdept'];
echo "<h2>".$sname."</h2>";
echo "<h2>".$sid."</h2>";
echo "<h2>".$sdept."</h2>";
?>
<form action="" method="post">
  <div class="form_settings">
    <p><span><strong>Subject Code</strong></span>
    	<select id="sub_sel" name="sub_id">
		<option>select subject</option>
		<?php
			$sel_sub = "select * from subject";
			$run_sub = mysqli_query($con,$sel_sub);
			while($get_sub = mysqli_fetch_array($run_sub)){
				$sub_id = $get_sub['sub_id'];
				echo "<option>".$sub_id."</option>";
			}
		?>
	</select>
    </p><br>
    <p><span><strong>Sessional Marks</strong></span><input type="number" name="s_marks" value="" /></p><br>
    <p><span><strong>Major Marks</strong></span><input type="number" name="m_marks" value="" /></p><br>
    <p><span><strong>Practical/Other Marks</strong></span><input type="number" name="p_marks" value="" /></p><br>
    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="update" value="update" /></p>
  </div>
</form>
<?php
	if(isset($_POST['update'])){
			$student_id = $_GET['student_id'];
			$sub_id = $_POST['sub_id'];
			$sessional_mark = $_POST['s_marks'];
			$major_mark = $_POST['m_marks'];
			$practical_mark = $_POST['p_marks'];
			$update_marks = "update marks set sessional_mark = '$sessional_mark' , major_mark = '$major_mark', practical_mark='$practical_mark' where sid='$student_id' and sub_id='$sub_id' ";
			$run_update = mysqli_query($con,$update_marks);
			echo "<script>alert('successfully updated');</script>";

	}
?>
