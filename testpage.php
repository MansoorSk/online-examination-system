<?php
session_start();
if(isset($_SESSION['javatest1'])){
  header('Location:javatest1.php');
}
if(isset($_SESSION['javatest2'])){
  header('location:javatest2.php');
}
if(isset($_SESSION['javatest3'])){
  header('location:javatest3.php');
}
if(isset($_SESSION['javatest4'])){
  header('location:javatest4.php');
}
if(isset($_SESSION['javatest5'])){
  header('location:javatest5.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Test Your Skills</a>
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
                  <li><a class="dropdown-item" href="UserProfile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">Java</h1>
        <div class="row">
          <div class="col-lg-3 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <a href="javatest1.php"><button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button></a>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
        </div>
        </div>

      </div>
      <div class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">Python</h1>
        <div class="row">
          <div class="col-lg-3 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
        </div>
        </div>

      </div>
      <div class="container" style="margin-top:20px;margin-bottom: 20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">C++</h1>
        <div class="row">
          <div class="col-lg-3 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
          <div class="col-lg-3" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3</h2>
            <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
        </div>
        <div class="col-lg-3" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5</h2>
          <button style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary"> Take a Test</button>
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
      
  </script>
</html>