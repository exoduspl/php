<?php
echo PHP_VERSION;
echo 2**10,'<br>';

$x=1000;
$y=100;
echo $x<=>$y;

$x=1;
$y=1.0;

echo gettype($x);
echo gettype($y);

if ($x==$y) {
  echo "równe";
}else {
  echo "różne";
}

if ($x===$y) {
  echo "identyczne";
}else {
  echo "różne<hr>";
}


$x=1;
echo $x;
echo ++$x;
echo $x++;
echo ++$x;
$x=$x++;
echo $x;
$y=$x++;
echo $y;
echo $x;




//gdfsbdsfhif
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo "$y<br>"; //3































 ?>
