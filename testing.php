<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body style="background-color:rgb(180,180,180);">
  <div class='container' style='border:2px solid black; border-radius:10px; margin-top: 25px;margin-bottom:25px;background-color:white;padding:20px;'>
    <form>
      <ol><li><div class='row' style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q1' class='inline'></h4>
                            <input type='radio' name='a1' id='a11'><label for='a11'id='q1o1' onclick="func()"></label><br>
                            <input type='radio' name='a1' id='a12'><label for='a12'id='q1o2' onclick="func()"></label><br>
                            <input type='radio' name='a1' id='a13'><label for='a13'id='q1o3' onclick="func()"></label><br>
                            <input type='radio' name='a1' id='a14'><label for='a14'id='q1o4' onclick="func()"></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row' style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q2' class='inline'></h4>
                            <input type='radio' name='a2' id='a21'><label for='a21'id='q2o1'></label><br>
                            <input type='radio' name='a2' id='a22'><label for='a22'id='q2o2'></label><br>
                            <input type='radio' name='a2' id='a23'><label for='a23'id='q2o3'></label><br>
                            <input type='radio' name='a2' id='a24'><label for='a24'id='q2o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q3' class='inline'></h4>
                            <input type='radio' name='a3' id='a31'><label for='a31'id='q3o1'></label><br>
                            <input type='radio' name='a3' id='a32'><label for='a32'id='q3o2'></label><br>
                            <input type='radio' name='a3' id='a33'><label for='a33'id='q3o3'></label><br>
                            <input type='radio' name='a3' id='a34'><label for='a34'id='q3o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q4' class='inline'></h4>
                            <input type='radio' name='a4' id='a41'><label for='a41'id='q4o1'></label><br>
                            <input type='radio' name='a4' id='a42'><label for='a42'id='q4o2'></label><br>
                            <input type='radio' name='a4' id='a43'><label for='a43'id='q4o3'></label><br>
                            <input type='radio' name='a4' id='a44'><label for='a44'id='q4o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q5' class='inline'></h4>
                            <input type='radio' name='a5' id='a51'><label for='a51'id='q5o1'></label><br>
                            <input type='radio' name='a5' id='a52'><label for='a52'id='q5o2'></label><br>
                            <input type='radio' name='a5' id='a53'><label for='a53'id='q5o3'></label><br>
                            <input type='radio' name='a5' id='a54'><label for='a54'id='q5o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>
                    <h4 id='q6' class='inline'></h4>
                            <input type='radio' name='a6' id='a61'><label for='a61'id='q6o1'></label><br>
                            <input type='radio' name='a6' id='a62'><label for='a62'id='q6o2'></label><br>
                            <input type='radio' name='a6' id='a63'><label for='a63'id='q6o3'></label><br>
                            <input type='radio' name='a6' id='a64'><label for='a64'id='q6o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q7' class='inline'></h4>
                            <input type='radio' name='a7' id='a71'><label for='a71'id='q7o1'></label><br>
                            <input type='radio' name='a7' id='a72'><label for='a72'id='q7o2'></label><br>
                            <input type='radio' name='a7' id='a73'><label for='a73'id='q7o3'></label><br>
                            <input type='radio' name='a7' id='a74'><label for='a74'id='q7o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q8' class='inline'></h4>
                            <input type='radio' name='a8' id='a81'><label for='a81'id='q8o1'></label><br>
                            <input type='radio' name='a8' id='a82'><label for='a82'id='q8o2'></label><br>
                            <input type='radio' name='a8' id='a83'><label for='a83'id='q8o3'></label><br>
                            <input type='radio' name='a8' id='a84'><label for='a84'id='q8o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q9' class='inline'></h4>
                            <input type='radio' name='a9' id='a91'><label for='a91'id='q9o1'></label><br>
                            <input type='radio' name='a9' id='a92'><label for='a92'id='q9o2'></label><br>
                            <input type='radio' name='a9' id='a93'><label for='a93'id='q9o3'></label><br>
                            <input type='radio' name='a9' id='a94'><label for='a94'id='q9o4'></label>
          </div>

      </div></li>
      <p class='border-bottom'></p>
      <li><div class='row'  style="margin-top:20px;margin-bottom:20px;">
          <div class='col-lg-6 offset-lg-2'>

                    <h4 id='q10' class='inline'></h4>
                            <input type='radio' name='a10' id='a101'><label for='a101'id='q10o1'></label><br>
                            <input type='radio' name='a10' id='a102'><label for='a102'id='q10o2'></label><br>
                            <input type='radio' name='a10' id='a103'><label for='a103'id='q10o3'></label><br>
                            <input type='radio' name='a10' id='a104'><label for='a104'id='q10o4'></label>
          </div>

      </div></li>
    </ol>
    <input type='button' onclick="fun()" value='Finish test' class='btn btn-success' style='margin-left:600px;margin:bottom:30px;' id="ft">
    </div>
</form>
</body>
<script>
    function fun(){
      alert(10);
      window.location='resultpage.php';
    }
    </script>
    </html>