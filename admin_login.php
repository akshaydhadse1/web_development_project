<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <center><br><br><br><br><br><br><br><br><br><br>
        <h1>Admin Login Page</h1></br>
        <form action="" method="POST">
            Email:<input type="text" name="email"required><br><br>
            Password:<input type="password" name="password"required><br><br>
            <input type="submit" name="submit">
        </form><br>
        <?php
        session_start();
        $email = "";
        $name = "";
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","","test1");
                $db = mysqli_select_db($connection,"test1");
                $query = "select * from login1 where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email'] == $_POST['email']){
                        if($row['password'] == $_POST['password']){
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            header("Location: admin_dashboard.php");
                            

                        }
                        else{
                            echo "wrong password";
                        }
                    }
                    else{
                        echo "wrong email id";
                    }
                }
            }
        ?>
        </center>
    </body>
</html>