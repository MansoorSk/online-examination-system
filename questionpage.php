

<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <div class="container" style="margin-top: 40px;margin-bottom: 100px; border: solid 2px;border-radius:10px;background-color:rgb(175, 163, 147)">
    <h1></h1>
    <div class="row" style="margin:10px 10px 10px 10px;">
    <h1><?php 
            $x=$_POST['td'];
            $s='';
            if($x[0]=='j'){
                $s.='Java test ';
            }
            else if($x[0]=='p'){
                $s.='Python test ';
            }
            else{
                $s.='C++ test ';
            }
            if($x[2]==1){
                $s.='1';
            }
            else if($x[2]==2){
                $s.=2;
            }
            else if($x[2]==3){
                $s.=3;
            }
            else if($x[2]==4){
                $s.=4;
            }
            else if($x[2]==5){
                $s.=5;
            }
            echo $s;
        ?></h1>
            <div class="col">
                <form method="post" action="insertj1.php">
                <input type="text" name="td" id="td" value=<?php echo $_POST['td']?>>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q1">Enter Question 1</label>
                                    <input class="form-control" id="q1" name="q1" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q1o1">option 1</label>
                                    <input class="form-control" id="q1o1" name="q1o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q1o2">Option 2</label>
                                    <input class="form-control" id="q1o2" name="q1o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q1o3">Option 3</label>
                                    <input class="form-control" id="q1o3" name="q1o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q1o4">Option 4</label>
                                    <input class="form-control" id="q1o4" name="q1o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q1c">correct option</label>
                                <input class="form-control" id="q1c"name ="q1c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q2">Enter Question 2</label>
                                    <input class="form-control" id="q2" name="q2"type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q2o1">option 1</label>
                                    <input class="form-control" id="q2o1" name="q2o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q2o2">Option 2</label>
                                    <input class="form-control" id="q2o2"name="q2o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q2o3">Option 3</label>
                                    <input class="form-control" id="q2o3"name="q2o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q2o4">Option 4</label>
                                    <input class="form-control" id="q2o4" name="q2o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q2c">correct option</label>
                                <input class="form-control" id="q2c" name="q2c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q3">Enter Question 3</label>
                                    <input class="form-control" id="q3" name="q3" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q3o1">option 1</label>
                                    <input class="form-control" id="q3o1" name="q3o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q3o2">Option 2</label>
                                    <input class="form-control" id="q3o2" name="q3o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q3o3">Option 3</label>
                                    <input class="form-control" id="q3o3" name="q3o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q3o4">Option 4</label>
                                    <input class="form-control" id="q3o4" name="q3o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q3c">correct option</label>
                                <input class="form-control" id="q3c" name="q3c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q4">Enter Question 4</label>
                                    <input class="form-control" id="q4" name="q4" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q4o1">option 1</label>
                                    <input class="form-control" id="q4o1"name="q4o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q4o2">Option 2</label>
                                    <input class="form-control" id="q4o2"name="q4o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q4o3">Option 3</label>
                                    <input class="form-control" id="q4o3"name="q4o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q4o4">Option 4</label>
                                    <input class="form-control" id="q4o4"name="q4o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q4c">correct option</label>
                                <input class="form-control" id="q4c"name="q4c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q5">Enter Question 5</label>
                                    <input class="form-control" id="q5"name="q5" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q5o1">option 1</label>
                                    <input class="form-control" id="q5o1" name="q5o1"type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q5o2">Option 2</label>
                                    <input class="form-control" id="q5o2"name="q5o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q5o3">Option 3</label>
                                    <input class="form-control" id="q5o3"name="q5o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q5o4">Option 4</label>
                                    <input class="form-control" id="q5o4"name="q5o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q5c">correct option</label>
                                <input class="form-control" id="q5c"name="q5c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q6">Enter Question 6</label>
                                    <input class="form-control" id="q6" name="q6" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q6o1">option 1</label>
                                    <input class="form-control" id="q6o1" name="q6o1"type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q6o2">Option 2</label>
                                    <input class="form-control" id="q6o2"name="q6o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q6o3">Option 3</label>
                                    <input class="form-control" id="q6o3"name="q6o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q6o4">Option 4</label>
                                    <input class="form-control" id="q6o4"name="q6o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q6c">correct option</label>
                                <input class="form-control" id="q6c"name="q6c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q7">Enter Question 7</label>
                                    <input class="form-control" id="q7" name="q7" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q7o1">option 1</label>
                                    <input class="form-control" id="q7o1" name="q7o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q7o2">Option 2</label>
                                    <input class="form-control" id="q7o2" name="q7o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q7o3">Option 3</label>
                                    <input class="form-control" id="q7o3" name="q7o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q7o4">Option 4</label>
                                    <input class="form-control" id="q7o4" name="q7o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q7c">correct option</label>
                                <input class="form-control" id="q7c" name="q7c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q8">Enter Question 8</label>
                                    <input class="form-control" id="q8" name="q8" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q8o1">option 1</label>
                                    <input class="form-control" id="q8o1" name="q8o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q8o2">Option 2</label>
                                    <input class="form-control" id="q8o2" name="q8o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q8o3">Option 3</label>
                                    <input class="form-control" id="q8o3" name="q8o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q8o4">Option 4</label>
                                    <input class="form-control" id="q8o4" name="q8o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q8c">correct option</label>
                                <input class="form-control" id="q8c" name="q8c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q9">Enter Question 9</label>
                                    <input class="form-control" id="q9" name="q9" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q9o1">option 1</label>
                                    <input class="form-control" id="q9o1" name="q9o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q9o2">Option 2</label>
                                    <input class="form-control" id="q9o2" name="q9o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q9o3">Option 3</label>
                                    <input class="form-control" id="q9o3" name="q9o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q9o4">Option 4</label>
                                    <input class="form-control" id="q9o4" name="q9o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q9c">correct option</label>
                                <input class="form-control" id="q9c" name="q9c" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="border:2px solid black;padding : 15px;">
                        <div class="row" style="margin-top: 25px;">
                                <div class="form-group" style="width:fill-content;">
                                    <label for="q10">Enter Question 10</label>
                                    <input class="form-control" id="q10" name="q10" type="text">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q10o1">option 1</label>
                                    <input class="form-control" id="q10o1" name="q10o1" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q10o2">Option 2</label>
                                    <input class="form-control" id="q10o2" name="q10o2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q10o3">Option 3</label>
                                    <input class="form-control" id="q10o3" name="q10o3" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group" style="width:fit-content;">
                                    <label for="q10o4">Option 4</label>
                                    <input class="form-control" id="q10o4" name="q10o4" type="text">
                                </div>
                            </div>
                            <div style="width: 200px;margin-left: 420px;">
                                <label for="q10c">correct option</label>
                                <input class="form-control" id="q10c" name="q10c" type="text">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-large btn-primary"style="margin-left:500px;"value="INSERT">
                </form>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>

  <script>
      $(document).ready(function(){
          $("#td").hide();
      });
  </script>

</html>