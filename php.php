<?php
echo "ZSŁ<br>";
echo "ZSŁ<hr>";
$name="Janusz";
echo 'Imię:$name<br>';
echo "Imię $name<br>";


$calkowita=10;
$bin=0b1011;
$oct=0b1011;
$hex=0x1011;

echo $hex, '<br>';

$x=10.5;
$prawda=true;
$falsz=false;
echo $falsz;

echo <<< ETYKIETA
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;

$text = <<< ETYKIETA
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;
echo $text;

echo <<< 'ETYKIETA'
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;





























?>
