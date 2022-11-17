<?php
	$connection = mysqli_connect("localhost","root","","test1");
	$db = mysqli_select_db($connection,"test1");
	$query = "insert into student values('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[class],$_POST[mobile],'$_POST[email]','$_POST[password]','$_POST[remark]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student Added successfully");
	window.location.href = "admin_dashboard.php";
</script>

