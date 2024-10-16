<?php

#第１講

echo "Hello world <br> PHPがんばるぞー！";

echo "<br><br>";


#第２講

$suugaku = 45;
$eigo = 82;
if($suugaku > 50 || $eigo > 50){
	echo"この人は合格です";
}


echo "<br>";
echo "<br>";

$number = 10;
echo $number;


echo "<br><br>";


$b = 2*5;
echo $b;
echo "<br>";
echo 2*5;

echo "<br><br>";


#第３講

echo 7 % 3;

echo "<br>";

$a = 10;
echo ++$a;
echo "<br>";
echo ++$a;
echo "<br>";
echo ++$a;
echo "<br>";
echo ++$a;
echo "<br>";

echo "<br>";

$c = 10;
echo $c++;
echo "<br>";
echo $c++;
echo "<br>";
echo $c++;
echo "<br>";
echo $c++;
echo "<br>";

echo "<br>";

$d = 10;
echo --$d;
echo "<br>";
echo --$d;
echo "<br>";
echo --$d;
echo "<br>";
echo --$d;
echo "<br>";
echo --$d;
echo "<br>";

echo "<br>";

$e = 10;
echo $e--;
echo "<br>";
echo $e--;
echo "<br>";
echo $e--;
echo "<br>";
echo $e--;
echo "<br>";

echo "<br><br>";

#第４講

$a_4 = 15;
if($a_4 > 10) {
	echo "A";
}

echo "<br><br>";

$b_4 = 9;
if($b_4 > 10) {
	echo "A";
} elseif($b_4 < 10) {
	echo "B";
}

echo "<br><br>";

$c_4 = 8;
if($c_4 > 10) {
	echo "A";
} else {echo "Z";
}

echo "<br><br>";

#第５講

$a_5 = 20;
if ($a_5 > 10) {
	if ($a_5 < 30) {
		echo "A";
	}
}

echo "<br><br>";

$kokugo = 80;
$rika = 65;
if ($kokugo >= 70) {
	if ($rika >= 70) {
		echo "合格";
	} else {
		echo "不合格";
	}
}


?>
 