<!-- NOT COMPLETED !!! -->


<?php
session_start();

print_r($_SESSION);
        $servername="localhost";
        $username="root";
        $password="";
        $databasename="miniproject";
        $x=$_SESSION['fid'];
        $conn=new mysqli($servername,$username,$password,$databasename);
        $sql="Select * from faculty where facultyid='$x'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $pic='photos/' . $row['photo'] . '.jpg';
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        #drop1:hover,#drop2:hover,#drop3:hover{
            background-color:rgb(140,140,140);
        }
    </style>
</head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Administrator portal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['fid'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink" style="background-color:white;">
                <li><a class="dropdown-item" href="facultypage.php" id="drop1">Home Page</a></li>
                  <li><a class="dropdown-item" href="facultyprofile.php" id="drop2">My Profile</a></li>
                  <li><a class="dropdown-item" href="site.php" id="drop3">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-lg-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"style="font-size:25px;font-weight:bold;"><img class="rounded-circle mt-5" width="150px" height="150px" src='<?php echo $pic;?>' disabled><?php echo $row['facultyname'];?></div>
                    
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $row['firstname'];?>"disabled></div>

                            <div class="col-lg-6"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="last name" value="<?php echo $row['lastname'];?>"disabled></div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12"><label class="labels">Faculty Id<input type="text" class="form-control" placeholder="Faculty Id" value="<?php echo $row['facultyid'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">Role<input type="text" class="form-control" placeholder="Role" value="<?php echo $row['role'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">Experience<input type="text" class="form-control" placeholder="Experience" value="<?php echo $row['experience'];?>"disabled></label></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>