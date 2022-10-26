<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    
  </head>
  <body>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="miniproject";
    $conn=new mysqli($servername,$username,$password,$databasename);
    
    /*for($i=1;$i<=10;$i+=1){
      $x=0;
      $c[$x++]=$_POST["q" . $i];
      for($j=1;$j<=4;$j+=1){
        $c[$x++]=$_POST["q" . $i . "o" . $j];
      }
      $c[$x++]=$_POST["q" . $i . "c"];
      $sql="INSERT INTO jt1 (qno,question,opt1,opt2,opt3,opt4,ans)
          VALUES
          ($i,$c[0],'$c[1]','$c[2]','$c[3]','$c[4]','$c[5]')";
        $result=$conn->query($sql);
      print_r($c);
    }*/


    $tab=$_POST['td'];


    
         $q1=$_POST['q1'];
         $q2=$_POST['q1o1'];
         $q3=$_POST['q1o2'];
         $q6=$_POST['q1o3'];
         $q4=$_POST['q1o4'];
         $q5=$_POST['q1c'];
         $i=1;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q2'];
         $q2=$_POST['q2o1'];
         $q3=$_POST['q2o2'];
         $q6=$_POST['q2o3'];
         $q4=$_POST['q2o4'];
         $q5=$_POST['q2c'];
         $i=2;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q3'];
         $q2=$_POST['q3o1'];
         $q3=$_POST['q3o2'];
         $q6=$_POST['q3o3'];
         $q4=$_POST['q3o4'];
         $q5=$_POST['q3c'];
         $i=3;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q4'];
         $q2=$_POST['q4o1'];
         $q3=$_POST['q4o2'];
         $q6=$_POST['q4o3'];
         $q4=$_POST['q4o4'];
         $q5=$_POST['q4c'];
         $i=4;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q5'];
         $q2=$_POST['q5o1'];
         $q3=$_POST['q5o2'];
         $q6=$_POST['q5o3'];
         $q4=$_POST['q5o4'];
         $q5=$_POST['q5c'];
         $i=5;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q6'];
         $q2=$_POST['q6o1'];
         $q3=$_POST['q6o2'];
         $q6=$_POST['q6o3'];
         $q4=$_POST['q6o4'];
         $q5=$_POST['q6c'];
         $i=6;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
         $q1=$_POST['q7'];
          $q2=$_POST['q7o1'];
          $q3=$_POST['q7o2'];
          $q6=$_POST['q7o3'];
          $q4=$_POST['q7o4'];
          $q5=$_POST['q7c'];
          $i=7;
          $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
          VALUES
          ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q8'];
         $q2=$_POST['q8o1'];
         $q3=$_POST['q8o2'];
         $q6=$_POST['q8o3'];
         $q4=$_POST['q8o4'];
         $q5=$_POST['q8c'];
         $i=8;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q9'];
         $q2=$_POST['q9o1'];
         $q3=$_POST['q9o2'];
         $q6=$_POST['q9o3'];
         $q4=$_POST['q9o4'];
         $q5=$_POST['q9c'];
         $i=9;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
        $q1=$_POST['q10'];
         $q2=$_POST['q10o1'];
         $q3=$_POST['q10o2'];
         $q6=$_POST['q10o3'];
         $q4=$_POST['q10o4'];
         $q5=$_POST['q10c'];
         $i=10;
         $sql="INSERT INTO $tab (qno,question,opt1,opt2,opt3,opt4,ans)
         VALUES
         ($i,'$q1','$q2','$q3','$q6','$q4','$q5')";
        $result=$conn->query($sql);
?>
<div class='container'>
  <div class='row'>
    <div class='col-lg-6 offset-lg-3'>
<h1>Successfully submitted</h1>
<a href="facultypage.php"><button class="btn btn-primary">Done</button></a>
  </div>
  </div>
  </div>  
</body>
  </html>