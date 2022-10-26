<?php
session_start();
session_destroy();
session_start();
if(isset($_SESSION['student'])){
    unset($_SESSION['student']);
}
if(isset($_SESSION['fid'])){
    unset($_SESSION['fid']);
}
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}
if(isset($_SESSION['javatest1'])){
    unset($_SESSION['javatest1']);
}
if(isset($_SESSION['refresh'])){
    unset($_SESSION['refresh']);
}
print_r($_SESSION);


//FOR TESTING PURPOSE
if(isset($_SESSION['javatest1'])){
    unset($_SESSION['javatest1']);
  }




if(isset($_SESSION['refresh'])){
    unset($_SESSION['refresh']);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>site</title>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top:20%;height: 200px;">
        <div class="col-lg-5" style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166)">
            <h1 style="margin-top: 15px;margin-left: 100px;">Student Login</h1>
            <button class="btn btn-lg btn-outline-dark" style="margin-left: 155px; margin-top: 40px;" data-bs-target="#loginmodal1" data-bs-toggle="modal">Login</button>
        </div>
        <div class="col-lg-5 offset-lg-2" style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166)">
            <h1 style="margin-top: 15px;margin-left:100px;">Faculty Login</h1>
            <button class="btn btn-lg btn-outline-dark" style="margin-left: 185px; margin-top: 40px;"  data-bs-target="#loginmodal2" data-bs-toggle="modal">Login</button>
        </div>
        </div>
    </div>
    <div class="modal" id="loginmodal1" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="alert alert-warning alert-dismissible fade show" id="err1" role="alert">
            <strong>Enter valid Registration Id</strong>
            <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" id="err2" role="alert">
            <strong>Enter valid Password</strong>
            <button type="button" class="btn-close" id="alert2" aria-label="Close"></button>
        </div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="validstudent.php">
                        <div class="form-group">
                            <label for="rid">Registration Id</label>
                            <input type="text" class="form-control" placeholder="Registration Id" id="rid" name='rid'>
                            <p id="p1"></p>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input class="form-control" placeholder="Password" type="text" id="pwd" name="pwd">
                            <p id="p2"></p>
                        </div>
                        <button class="btn btn-primary">Login</button>
                        <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="loginmodal2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="alert alert-warning alert-dismissible fade show" id="err3" role="alert">
            <strong>Enter valid Faculty Id</strong>
            <button type="button" class="btn-close" id="alert3" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" id="err4" role="alert">
            <strong>Enter valid Password</strong>
            <button type="button" class="btn-close" id="alert4" aria-label="Close"></button>
        </div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Faculty Login</h4>
                    <button class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="validfaculty.php">
                        <div class="form-group">
                            <label for="fid">Faculty Id</label>
                            <input type="text" class="form-control" placeholder="Registration Id" id="fid" name="fid">
                            <p id="p3"></p>
                        </div>
                        <div class="form-group">
                            <label for="fpwd">Password</label>
                            <input class="form-control" placeholder="Password" type="text" id="fpwd" name="fpwd">
                            <p id="p4"></p>
                        </div>
                        <input type="submit" class="btn btn-primary" id='login' value="Login">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
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
          $("#alert1").click(function(){
              $("#err1").hide('fade');
          });
          $("#alert2").click(function(){
              $("#err2").hide('fade');
          });
          $("#alert3").click(function(){
              $("#err3").hide('fade');
          });
          $("#alert4").click(function(){
              $("#err4").hide('fade');
          });
          $("#err1").hide();
          $("#err2").hide();
          $("#err3").hide();
          $("#err4").hide();
          $("#rid").focusin(function(){
            $(this).css("border-bottom","3px solid red");
              $("#p1").text("Enter registration number correctly");
          });
          $("#fid").focusin(function(){
            $(this).css("border-bottom","3px solid red");
              $("#p3").text("Enter correct id");
          });
          $("#pwd").focusin(function(){
            $(this).css("border-bottom","3px solid red");
              $("#p2").text("Enter registration number correctly");
          });
          $("#fpwd").focusin(function(){
            $(this).css("border-bottom","3px solid red");
              $("#p4").text("Enter correct Password");
          });
          var e_rid=false;
          var e_pwd=false;
          var e_fid=false;
          var e_fpwd=false;
          $("#rid").focusout(function(){
            $("#p1").text("");
              check_rid();
          });
          $("#pwd").focusout(function(){
            $("#p2").text("");
              check_pwd();
          });
          $("#fid").focusout(function(){
            $("#p3").text("");
              check_fid();
          });
          $("#fpwd").focusout(function(){
            $("#p4").text("");
              check_fpwd();
          });
        //   $('#login').click(function(){
        //       if(e_fid==false && e_fpwd==false){
        //           $(location).attr('href','validfaculty.php');
        //       }
        //   });

      });
      function check_rid(){
          var p=/[1][9][0][9][1]A[0][1-9]{3}/;
          var r=$("#rid").val();
          if(p.test(r) && r!=''){
            $("#rid").css("border-bottom","3px solid green");
          }
          else{
              $("#err1").css("width","350px");
              $("#err1").css("margin-left","950px");
              $("#err1").slideDown("slow");
              e_rid=true;
          }
      }
      function check_pwd(){
          var p=/[a-zA-Z!@#$%^&*]{6,9}/;
          var r=$("#pwd").val();
          if(p.test(r) && r!=''){
            $("#pwd").css("border-bottom","3px solid green");
          }
          else{
            $("#err2").css("width","350px");
              $("#err2").css("margin-left","950px");
              $("#err2").slideDown();
              e_pwd=true;
          }
      }
      function check_fid(){
          var p=/[1][9][0][9][1]A[0][1-9]{3}/;
          var r=$("#fid").val();
          if(p.test(r) && r!=''){
            $("#fid").css("border-bottom","3px solid green");
          }
          else{
            $("#err3").css("width","350px");
              $("#err3").css("margin-left","950px");
              $("#err3").slideDown();
              e_fid=true;
          }
      }
      function check_fpwd(){
          var p=/[a-zA-Z!@#$%^&*]{6,9}/;
          var r=$("#fpwd").val();
          if(p.test(r) && r!=''){
            $("#fpwd").css("border-bottom","3px solid green");
          }
          else{
            $("#err4").css("width","350px");
              $("#err4").css("margin-left","950px");
              $("#err4").slideDown();
              e_fpwd=true;
          }
      }
  </script>
</html>