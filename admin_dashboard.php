<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            #header{
                height: 10%;
                width: 100%;
                top: 2%;
                background-color:rgba(110, 120, 130, 1.0) ;
                position: fixed;
                color: white;
            }
            #left_side{
                
                margin-top: 80px;
                height: 75%;
                width: 15%;
                top: 10%;
                position: fixed;
                background-color: rgba(100, 0, 250, 0.1);
                
            }
            #right_side{
                height: 75%;
                width: 80%;
                top: 21%;
                background-color: whitesmoke;
                position: fixed;
                left: 17%;
                color: red;
                border: solid 1px black;

            }
            #top_span{
                top: 15%;
                width: 80%;
                left: 17%;
                position: fixed;
            }
        </style>
        <?php
           session_start();
           $connection = mysqli_connect("localhost","root","","test1");
           $db = mysqli_select_db($connection,"test1");
        ?>
    </head>
    <body>
        <div id="header" class="">
            <center ><br><strong><b>College Management System</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php  echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;Name: <?php  echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php" class="btn btn-light button">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a>

            </center>

        </div>
        <span id="top_span"><marquee> Note: this portal is open still 10 April.......</marquee></span>
        <div id="left_side"><br><br><br><br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            <input class="btn btn-outline-success" type="submit"  name="search_student" value="    Search Student         ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-outline-danger" type="submit"  name="add" value="   Add Student Details  ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-outline-danger" type="submit"  name="update" value="Update Student Details">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-outline-danger" type="submit"  name="delete" value="Delete Student Details ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-outline-dark" type="submit"  name="print" value="              Print                ">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-outline-dark" type="submit"  name="Exit" value="              Exist                ">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <div id="right_side"><br><br>
        <div id="demo">
            <?php
               if(isset($_POST['search_student'])) 
               {
                   ?>
                   <center>
                       <form action="" method="POST">
                           Enter Roll No:
                           <input type="text" name="roll_no">
                           <input type="submit" name="search_by_roll_no_for_search" value="search">

                       </form>
                   </center>
                   <?php

               } 
               if(isset($_POST['search_by_roll_no_for_search'])) 
               {
                $query = "select * from student where roll_no = '$_POST[roll_no]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>

                    <table>
                        <tr>
                            <td><b>Roll No:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['roll_no'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>name:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['name'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>father_name:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['father_name'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>class:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['class'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>mobile:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['mobile'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>email:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['email'];?>"disabled>
                            </td>
                            <tr>
                            <td><b>password:&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['password'];?>"disabled>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Remark:&nbsp;</b></td>
                            <td>
                                <textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>
                            </td>
                        </tr>
                        
                    </table>
                    <?php
                }

            }
            ?>
             <?php
               if(isset($_POST['update'])) 
               {
                   ?>
                   <center>
                       <form action="" method="POST">
                           Enter Roll No:
                           <input type="text" name="roll_no">
                           <input type="submit" name="search_by_roll_no_for_update" value="search">

                       </form>
                   </center>
                   <?php

               } 
               if(isset($_POST['search_by_roll_no_for_update'])) 
               {
                $query = "select * from student where roll_no = '$_POST[roll_no]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="admin_update_student.php" method="POST">
                    <table>
                        <tr>
                            <td><b>Roll No:&nbsp;</b></td>
                            <td>
                                <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>name:&nbsp;</b></td>
                            <td>
                                <input type="text" name="name" value="<?php echo $row['name'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>father_name:&nbsp;</b></td>
                            <td>
                                <input type="text" name="father_name" value="<?php echo $row['father_name'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>class:&nbsp;</b></td>
                            <td>
                                <input type="text" name="class" value="<?php echo $row['class'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>mobile:&nbsp;</b></td>
                            <td>
                                <input type="text" name="mobile" value="<?php echo $row['mobile'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>email:&nbsp;</b></td>
                            <td>
                                <input type="text" name="email" value="<?php echo $row['email'];?>">
                            </td>
                            <tr>
                            <td><b>password:&nbsp;</b></td>
                            <td>
                                <input type="text" name="password" value="<?php echo $row['password'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Remark:&nbsp;</b></td>
                            <td>
                                <textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>
                            </td>
                        </tr>
                        </tr><br>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="update" value="save"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                }
            }
                    ?>
                    <?php
                    if(isset($_POST['add'])){
                        ?>
                        <center><h4 style="color: red;">Fill The Given Details:</h4></center>
                        <form action="add_student.php" method="POST">
                            <table>
                                <tr>
                                    <td>Roll No:</td>
                                    <td>
                                        <input type="text" name="roll_no" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name:</td>
                                    <td>
                                        <input type="text" name="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Father name:</td>
                                    <td>
                                        <input type="text" name="father_name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Class:</td>
                                    <td>
                                        <input type="text" name="class" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile:</td>
                                    <td>
                                        <input type="text" name="mobile" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>
                                        <input type="text" name="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td>
                                        <input type="text" name="password" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Remark:</td>
                                    <td>
                                        <textarea rows="3" cols="40" name="remark"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="Add" value="Add Student"></td>
                                </tr>
                            </table>

                        </form>
                        <?php
                    }
                    ?>
                    <?php
                    if(isset($_POST['delete'])){
                        ?>
                        <center>
                            <h4>Enter Roll No to delete student </h4><br>
                            <form action="delete_student.php" method="POST">
                                Roll No:
                                <input type="text" name="roll_no">
                                <input type="submit" name="search_by_roll_no_for_delete" value="delete student">

                            </form>
                        </center>
                        <?php
                    }
                    ?>

        </div>

    </body>
</html>