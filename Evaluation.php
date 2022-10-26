<?php
$x=$_GET['x'];
$x1=json_decode($x);
$x2=(array)$x1;
echo $x2['correct'];
?>