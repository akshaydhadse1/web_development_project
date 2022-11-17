<?php 
$con=mysqli_connect("localhost","root","","test1");
if(!$con)
{
    print("not connected");
}
$count=mysqli_query($con,"delete from student where roll_no='$_POST[roll_no]'");
if($count>=1)
{
    include('admin_dashboard.php');
}
mysqli_close($con);
 ?>}
<script type="text/javascript">
    alert("Details updated successfully");
    window.location.href = "admin_dashboard.php";
</script>