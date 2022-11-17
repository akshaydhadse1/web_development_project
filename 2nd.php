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