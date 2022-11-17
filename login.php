<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            body{
                background-image: url(img/);
                margin: 20px;
                padding: 10px;
                
                }

            h1{
                font-family:Times New Roman;
                font-style:Bold;
                font-size: 80px;
            }
            img{
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body style="background-image: url(img/);  background-color: yellow ;">
        
        
        <center><br><br><br><br><br>
        <img src="img/88.jfif">
        <h1>College Management System</h1></br>
        <form action="" method="POST">
        <input type="submit" class="btn btn-dark" name="admin_login" value="Admin Login">
        <input type="submit" class="btn btn-dark" name="student_login" value="Student Login">
        </form>
        <?php
            if(isset($_POST['admin_login'])){
                header("Location: ad_login.html");

            }
            if(isset($_POST['student_login'])){
                header("Location: stud_login.html");

            }
        ?>
        </center>
    </body>
</html>