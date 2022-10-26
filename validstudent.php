<?php
if(isset($_SESSION['student'])){
    unset($_SESSION['student']);
}
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}
            $x=$_POST['rid'];
            $y=$_POST['pwd'];
            $servername="localhost";
            $username="root";
            $password="";
            $databasename="miniproject";
            $conn=new mysqli($servername,$username,$password,$databasename);
            $sql="Select * from students where id='$x' and pwd='$y'";
            $result=$conn->query($sql);
            if($result->num_rows==1){
                $row=$result->fetch_assoc();
                session_start();
                $_SESSION['student']=$row['firstname'];
                $_SESSION['id']=$x;
                header('location:testpage.php');
            }
            else{
                header('location:site.php');
            }
        ?>