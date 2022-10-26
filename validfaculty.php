<?php

session_start();
print_r($_SESSION);
            $x=$_POST['fid'];
            $y=$_POST['fpwd'];
            $servername="localhost";
            $username="root";
            $password="";
            $databasename="miniproject";
            $conn=new mysqli($servername,$username,$password,$databasename);
            $sql="Select * from faculty where facultyid='$x' and pwd='$y'";
            $result=$conn->query($sql);
            if($result->num_rows==1){
                $_SESSION['fid']=$x;
                header('location:facultypage.php');
            }
            else{
                header('location:site.php');
            }
        ?>