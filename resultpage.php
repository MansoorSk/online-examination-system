<?php
session_start();
$x=$_GET['x'];
$x1=json_decode($x);
$x2=(array)$x1;
print_r($x2);
// ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Result Page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Your Progress</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['id'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="testpage.php">Home</a></li>  
                  <li><a class="dropdown-item" href="UserProfile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row" style="margin-top:30px;">
                <h3>Attempted questions</h3>
                <div class="progress" style="width: 650px;">
  <div id="p1" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['answered'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Not Attempted questions</h3>
                <div class="progress" style="width: 650px;">
  <div id="p2" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['not_answered'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Correctly answered</h3>
                <div class="progress" style="width: 650px;">
  <div  id="p3" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['correct'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Wrong answers</h3>
                <div class="progress" style="width: 650px;">
  <div  id="p4" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['not_correct'];?>0%"></div>
</div>
          </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
      $(document).ready(function(){
        var c=<?php echo $x2['correct']; ?>;
        var a=<?php echo $x2['answered']; ?>;
        var na=<?php echo $x2['not_answered']; ?>;
        var w=<?php echo $x2['not_correct']; ?>;
        if(c>=7){
            $("#p3").addClass("bg-success");
        }
        else if(c>=4){
            $("#p3").addClass("bg-warning");
        }
        else{
            $("#p3").addClass("bg-danger");
        }
        if(w>=7){
            $("#p4").addClass("bg-danger");
        }
        else if(w>=4){
            $("#p4").addClass("bg-warning");
        }
        else{
            $("#p4").addClass("bg-success");
        }
        if(a>=7){
            $("#p1").addClass("bg-success");
        }
        else if(a>=4){
            $("#p1").addClass("bg-warning");
        }
        else{
            $("#p1").addClass("bg-danger");
        }
        if(na>=7){
            $("#p2").addClass("bg-danger");
        }
        else if(na>=4){
            $("#p2").addClass("bg-warning");
        }
        else{
            $("#p2").addClass("bg-success");
        }
      });
      </script>
</html>
