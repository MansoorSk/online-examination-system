<?php
   session_start();
    // $_SESSION['javatest1']='start';
    //  if(!isset($_SESSION['refresh'])){
    //      $_SESSION['refresh']='true';
    //  }
    // else{
    //      header('Location:site.php');
    //  }
    if(isset($_SESSION['c'])){
        unset($_SESSION['c']);
    }
    if(isset($_SESSION['a'])){
        unset($_SESSION['a']);
    }
    if(isset($_SESSION['na'])){
        unset($_SESSION['na']);
    }
    if(isset($_SESSION['nc'])){
        unset($_SESSION['nc']);
    }
        $servername="localhost";
        $username="root";
        $password="";
        $databasename="miniproject";
        $conn=new mysqli($servername,$username,$password,$databasename);
        $arr=array(1,2,3,4,5,6,7,8,9,10);
        shuffle($arr);
        $sql='select * from jt1 where qno= '. $arr[0];
        $result1=$conn->query($sql);
        $row1=$result1->fetch_assoc();
        $_SESSION["a1"]=$row1['ans'];
        $sql='select * from jt1 where qno= '. $arr[1];
        $result1=$conn->query($sql);
        $row2=$result1->fetch_assoc();
        $_SESSION['a2']=$row2['ans'];
        $sql='select * from jt1 where qno= '. $arr[2];
        $result1=$conn->query($sql);
        $row3=$result1->fetch_assoc();
        $_SESSION['a3']=$row3['ans'];
        $sql='select * from jt1 where qno= '. $arr[3];
        $result1=$conn->query($sql);
        $row4=$result1->fetch_assoc();
        $_SESSION['a4']=$row4['ans'];
        $sql='select * from jt1 where qno= '. $arr[4];
        $result1=$conn->query($sql);
        $row5=$result1->fetch_assoc();
        $_SESSION['a5']=$row5['ans'];
        $sql='select * from jt1 where qno= '. $arr[5];
        $result1=$conn->query($sql);
        $row6=$result1->fetch_assoc();
        $_SESSION['a6']=$row6['ans'];
        $sql='select * from jt1 where qno= '. $arr[6];
        $result1=$conn->query($sql);
        $row7=$result1->fetch_assoc();
        $_SESSION['a7']=$row7['ans'];
        $sql='select * from jt1 where qno= '. $arr[7];
        $result1=$conn->query($sql);
        $row8=$result1->fetch_assoc();
        $_SESSION['a8']=$row8['ans'];
        $sql='select * from jt1 where qno= '. $arr[8];
        $result1=$conn->query($sql);
        $row9=$result1->fetch_assoc();
        $_SESSION['a9']=$row9['ans'];
        $sql='select * from jt1 where qno= '. $arr[9];
        $result1=$conn->query($sql);
        $row10=$result1->fetch_assoc();
        $_SESSION['a10']=$row10['ans'];
        $var='s';
for($i=1;$i<=10;$i++){
    unset($_SESSION[$var . '' . $i]);
}
        print_r($_SESSION);
?>
            <?php
                /*if(isset($_POST['a1'])){
                $_SESSION['s1']=$_POST['a1'];
                    echo 'POST  a1 : ' . $_POST['a1'] . '</br>';
                    echo 'Session  s1 : ' . $_SESSION['s1'] . '</br>';
                }
                if(isset($_POST['a2']))
                $_SESSION['s2']=$_POST['a2'];
                if(isset($_POST['a3']))
                $_SESSION['s3']=$_POST['a3'];
                if(isset($_POST['a4']))
                $_SESSION['s4']=$_POST['a4'];
                if(isset($_POST['a5']))
                $_SESSION['s5']=$_POST['a5'];
                if(isset($_POST['a6']))
                $_SESSION['s6']=$_POST['a6'];
                if(isset($_POST['a7']))
                $_SESSION['s7']=$_POST['a7'];
                if(isset($_POST['a8']))
                $_SESSION['s8']=$_POST['a8'];
                if(isset($_POST['a9']))
                $_SESSION['s9']=$_POST['a9'];
                if(isset($_POST['a10']))
                $_SESSION['s10']=$_POST['a10'];*/
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
    <title>Hello, world!</title>
  </head>
  <body style="background-color:rgb(180,180,180);">

  <p id="ten-countdown" style="margin-left:780px;font-size:30px;border:2px solid black;width:100px;text-align:center;background-color:rgb(90,90,90);color:white;"></p>
  <script>
      function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "Time is up!";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "ten-countdown", 10, 0 );
</script>

      <!-- <p id='countdown' style='margin-left:650px;border:2px solid black;border-radius:5px;'></p>
      <script src='script.js'></script> -->
    <h1>Test on Java<span class="badge bg-secondary">New</span></h1>
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
    <input type='button' value='Finish test' class='btn btn-success' style='margin-left:600px;margin:bottom:30px;' id="ft">
    <h1 id="i1">hi</h1>
    <h1 id="i2">hi</h1>
    <h1 id="i3">hi</h1>
    <h1 id="i4">hi</h1>
    </div>
</form>
</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <script>
    var1=<?php echo json_encode($row1); ?>;
      var2=<?php echo json_encode($row2); ?>;
      var3=<?php echo json_encode($row3); ?>;
      var4=<?php echo json_encode($row4); ?>;
      var5=<?php echo json_encode($row5); ?>;
      var6=<?php echo json_encode($row6); ?>;
      var7=<?php echo json_encode($row7); ?>;
      var8=<?php echo json_encode($row8); ?>;
      var9=<?php echo json_encode($row9); ?>;
      var10=<?php echo json_encode($row10); ?>;
    const v=['','','','','','','','','',''];






      $(document).ready(function(){
          $("input[name=n]").hide();
          $('#q1o1').click(function(){
              v[0]=var1['opt1'];
              alert(v[0]==var1['ans']);
          });
          $('#q1o2').click(function(){
            v[0]=var1['opt2'];
              alert(v[0]);
          });
          $('#q1o3').click(function(){
            v[0]=var1['opt3'];
              alert(v[0]);
          });
          $('#q1o4').click(function(){
            v[0]=var1['opt4'];
              alert(v[0]);
          });
          $('#q1').text(var1['question']);
          $('#q1o1').text(var1['opt1']);
          $('#q1o2').text(var1['opt2']);
          $('#q1o3').text(var1['opt3']);
          $('#q1o4').text(var1['opt4']);

          $('#q2o1').click(function(){
            v[1]=var2['opt1'];
            alert(v[1]);
          });
          $('#q2o2').click(function(){
            v[1]=var2['opt2'];alert(v[1]);
          });
          $('#q2o3').click(function(){
            v[1]=var2['opt3'];alert(v[1]);
          });
          $('#q2o4').click(function(){
            v[1]=var2['opt4'];alert(v[1]);
          });
          $('#q2').text(var2['question']);
          $('#q2o1').text(var2['opt1']);
          $('#q2o2').text(var2['opt2']);
          $('#q2o3').text(var2['opt3']);
          $('#q2o4').text(var2['opt4']);

          $('#q3o1').click(function(){
            v[2]=var3['opt1'];alert(v[2]);
          });
          $('#q3o2').click(function(){
              v[2]=var3['opt2'];alert(v[2]);
          });
          $('#q3o3').click(function(){
            v[2]=var3['opt3'];alert(v[2]);
          });
          $('#q3o4').click(function(){
            v[2]=var3['opt4'];alert(v[2]);
          });
          $('#q3').text(var3['question']);
          $('#q3o1').text(var3['opt1']);
          $('#q3o2').text(var3['opt2']);
          $('#q3o3').text(var3['opt3']);
          $('#q3o4').text(var3['opt4']);
          
          $('#q4o1').click(function(){
            v[3]=var4['opt1'];
            alert(v[3]);
          });
          $('#q4o2').click(function(){
            v[3]=var4['opt2'];
            alert(v[3]);
          });
          $('#q4o3').click(function(){
            v[3]=var4['opt3'];
            alert(v[3]);
          });
          $('#q4o4').click(function(){
            v[3]=var4['opt4'];
            alert(v[3]);
          });
          $('#q4').text(var4['question']);
          $('#q4o1').text(var4['opt1']);
          $('#q4o2').text(var4['opt2']);
          $('#q4o3').text(var4['opt3']);
          $('#q4o4').text(var4['opt4']);
          
          $('#q5o1').click(function(){
            v[4]=var5['opt1'];
          });
          $('#q5o2').click(function(){
            v[4]=var5['opt2'];
          });
          $('#q5o3').click(function(){
            v[4]=var5['opt3'];
          });
          $('#q5o4').click(function(){
            v[4]=var5['opt4'];
          });
          $('#q5').text(var5['question']);
          $('#q5o1').text(var5['opt1']);
          $('#q5o2').text(var5['opt2']);
          $('#q5o3').text(var5['opt3']);
          $('#q5o4').text(var5['opt4']);
          

          $('#q6o1').click(function(){
            v[5]=var6['opt1'];
          });
          $('#q6o2').click(function(){
            v[5]=var6['opt2'];
          });
          $('#q6o3').click(function(){
            v[5]=var6['opt3'];
          });
          $('#q6o4').click(function(){
            v[5]=var6['opt4'];
          });
          $('#q6').text(var6['question']);
          $('#q6o1').text(var6['opt1']);
          $('#q6o2').text(var6['opt2']);
          $('#q6o3').text(var6['opt3']);
          $('#q6o4').text(var6['opt4']);

          $('#q7o1').click(function(){
            v[6]=var7['opt1'];
          });
          $('#q7o2').click(function(){
            v[6]=var7['opt2'];
          });
          $('#q7o3').click(function(){
            v[6]=var7['opt3'];
          });
          $('#q7o4').click(function(){
            v[6]=var7['opt4'];
          });
          $('#q7').text(var7['question']);
          $('#q7o1').text(var7['opt1']);
          $('#q7o2').text(var7['opt2']);
          $('#q7o3').text(var7['opt3']);
          $('#q7o4').text(var7['opt4']);

          $('#q8o1').click(function(){
            v[7]=var8['opt1'];
          });
          $('#q8o2').click(function(){
            v[7]=var8['opt2'];
          });
          $('#q8o3').click(function(){
            v[7]=var8['opt3'];
          });
          $('#q8o4').click(function(){
            v[7]=var8['opt4'];
          });
          $('#q8').text(var8['question']);
          $('#q8o1').text(var8['opt1']);
          $('#q8o2').text(var8['opt2']);
          $('#q8o3').text(var8['opt3']);
          $('#q8o4').text(var8['opt4']);
          

          $('#q9o1').click(function(){
            v[8]=var9['opt1'];
          });
          $('#q9o2').click(function(){
            v[8]=var9['opt2'];
          });
          $('#q9o3').click(function(){
            v[8]=var9['opt3'];
          });
          $('#q9o4').click(function(){
            v[8]=var9['opt4'];
          });
          $('#q9').text(var9['question']);
          $('#q9o1').text(var9['opt1']);
          $('#q9o2').text(var9['opt2']);
          $('#q9o3').text(var9['opt3']);
          $('#q9o4').text(var9['opt4']);

          $('#q10o1').click(function(){
            v[9]=var10['opt1'];
          });
          $('#q10o2').click(function(){
            v[9]=var10['opt2'];
          });
          $('#q10o3').click(function(){
            v[9]=var10['opt3'];
          });
          $('#q10o4').click(function(){
            v[9]=var10['opt4'];
            alert(v[9]);
          });
          $('#q10').text(var10['question']);
          $('#q10o1').text(var10['opt1']);
          $('#q10o2').text(var10['opt2']);
          $('#q10o3').text(var10['opt3']);
          $('#q10o4').text(var10['opt4']);
          
          
          $("#ft").click(function(){
               var c=0;
               var nc=0,na=0;
               
               if(v[0]==var1['ans']){
                   c+=1;
               }
               else if(v[0]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[1]==var2['ans']){
                   c+=1;
               }
               else if(v[1]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[2]==var3['ans']){
                   c+=1;
               }
               else if(v[2]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[3]==var4['ans']){
                   c+=1;
               }
               else if(v[3]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[4]==var5['ans']){
                   c+=1;
               }
               else if(v[4]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[5]==var6['ans']){
                   c+=1;
               }
               else if(v[5]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[6]==var7['ans']){
                   c+=1;
               }
               else if(v[6]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[7]==var8['ans']){
                   c+=1;
               }
               else if(v[7]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[8]==var9['ans']){
                   c+=1;
               }
               else if(v[8]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }

               if(v[9]==var10['ans']){
                   c+=1;
               }
               else if(v[9]!=''){
                   nc+=1;
               }
               else{
                   na+=1;
               }
               var a=10-na;
               alert(c+" Correct");
               alert(nc+" Incorrect");
               alert(a+" Attempted");
               alert(na+" Not Attempted");
               var obj={
                    correct:c,
                    not_correct:nc,
                    answered:a,
                    not_answered:na
                };
                var json=JSON.stringify(obj);
                window.location="resultpage.php?x="+json;
           });
      });
    </script>
</html>

