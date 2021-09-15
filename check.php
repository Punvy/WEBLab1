<?php
  function inCircle($x, $y, $r)
{
    return (($x >= 0) && ($y >= 0) && (($x * $x + $y * $y) <= $r * $r / 4));
}

function inTriangle($x, $y, $r)
{
    return (($x <= 0) && ($y <= 0) && ($x - $r >= 2*$y));
}

function inRectangle($x, $y, $r)
{
    return (($x <= 0) && ($y >= 0) && ($y <= $r) && ($x >= $r));
}


function inArea($x, $y, $r)
{
    if (inCircle($x, $y, $r) || inTriangle($x, $y, $r) || inRectangle($x, $y, $r)) return "попал";
    else return "не попал";
}

if (isset($_POST['x'])&&isset($_POST['y'])&&isset($_POST['r'])){
  $x = $_POST['x'];
  $y = $_POST['y'];
  $r = $_POST['r'];

  $res = inArea($x, $y, $r);
  $currentTime = date("H : i : s");
  $benchmarkTime = number_format(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 10, ".", "") * 1000000;

  echo "<tr>"."<td>".$x."</td>"."<td>".$y."</td>"."<td>".$r."</td>"."<td>".$currentTime."</td>"."<td>".$benchmarkTime."</td>"."<td>".$res."</td>"."</tr>";
}
 ?>
