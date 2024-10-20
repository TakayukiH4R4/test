<?php

//第１１講

for($i = 1; $i <= 100; $i++) {
	echo "$i";
	echo "-";
}

echo"<br><br>";

for($k = 1; $k <= 5; $k++) {
	echo "★";
}

echo"<br><br>";

//第１２講

for($j = 1; $j <= 10; $j++) {
	if($j % 2 == 0) {
		echo $j."<br>";
	}
}

for($l = 1; $l <= 3; $l++) {
	echo "■外側のfor文".$l."回目<br>";
	for($m = 1; $m <= 3; $m++) {
		echo "内側のfor文".$m."回目<br>";
	}
}

echo"<br><br>";


//第１３講

$n = 1;
while($n <= 100) {
	echo $n."-"; $n++;
}
echo"<br><br>";

$o = 1;
while($o <= 5) {
	echo "★"; $o++;
}

echo"<br><br>";


//第１４講

$p = array("東京","千葉","埼玉","神奈川");
echo $p[0];

echo"<br><br>";

foreach($p as $value) {
	echo $value;
}
echo"<br><br>";

$q = array("田中","鈴木","ウガンダ");
foreach($q as $q_2 => $q_3) {
	echo $q_2.$q_3;
}


?>