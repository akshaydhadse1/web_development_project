<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#header{
  			height: 10%;
  			width: 100%;
  			top: 2%;
  			background-color: rgba(110, 120, 130, 1.0) ;
  			position: fixed;
  			color: white;
  		}
  		#left_side{
  			height: 75%;
  			width: 15%;
  			top: 10%;
  			position: fixed;
  			 background-color: rgba(100, 0, 250, 0.1);
  			 margin-top: 80px;
  		}
  		#right_side{
  			height: 79%;
  			width: 80%;
  			background-color: whitesmoke;
  			position: fixed;
  			left: 17%;
  			top: 21%;
  			color: red;
  			border: solid 1px black;
  		}
  		#top_span{
  			top: 15%;
  			width: 80%;
  			left: 17%;
  			position: fixed;
  		}
  		#td{
  			border: solid 1px black;
  			padding-left: 2px;
  			text-align: left;
  			width: 200px;
  		}
  		.button{
  			margin-left: 50px;
  		}
  		img{
  			height: 50px;
  			width: 70px;
  		}
  	</style>
  	<?php
  		session_start();
  		$connection = mysqli_connect("localhost","root","","test1");
		$db = mysqli_select_db($connection,"test1"); 
  	?>
</head>
<body>
	<div id="header">
		
		<center><br><strong><b>College Management System</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php  echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;Name: <?php  echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="logout.php" class="btn btn-light button">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open til 10 April... plz edit your information if wrong.</marquee></span>
	<div id="left_side"><br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input class="btn btn-outline-success" type="submit" name="show_detail" value="Show Details">
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-outline-success" type="submit" name="edit_detail" value=" Edit Details  ">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php

				if(isset($_POST['show_detail'])){
					$query=("select * from student where email = '$_SESSION[email]'");
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<table>
							<tr>
								<td>
									<b>Roll NO:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['roll_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Father's Name:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['class']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>email:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td>
								<td>
									<input type="text" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr><tr>
								<td>
									<b>Remark:</b>
								</td>
								<td>
									<textarea rows="2" cols="40" disabled><?php echo $row['remark'];?></textarea>
								</td>
							</tr>
						</table>
						<?php
					}
				}
			?>

			<?php
				if(isset($_POST['edit_detail'])){
					$query=("select * from student where email = '$_SESSION[email]'");
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<form action="edit_student.php" method="post">
							<table>
							<tr>
								<td>
									<b>Roll NO:</b>
								</td>
								<td>
									<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td>
									<input type="text" name="name" value="<?php echo $row['name']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Father's Name:</b>
								</td>
								<td>
									<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td>
								<td>
									<input type="text" name="class" value="<?php echo $row['class']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td>
								<td>
									<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>email:</b>
								</td>
								<td>
									<input type="text" name="email" value="<?php echo $row['email']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td>
								<td>
									<input type="text" name="password" value="<?php echo $row['password']?>">
								</td>
							</tr><tr>
								<td>
									<b>Remark:</b>
								</td>
								<td>
									<textarea rows="3" cols="40" name="remark"><?php echo $row['remark'];?></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save"></td>
							</tr>
						</table>
						</form>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>