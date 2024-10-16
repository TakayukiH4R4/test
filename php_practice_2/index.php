<?php

#第６講

$a_6 = 2;

if ($a_6 == 0) {
	echo "aは０に等しい";
} elseif ($a_6 == 1) {
	echo "aは１に等しい";
}

echo "<br><br>";

switch($a_6) {
	case 0:
		echo "aは０に等しい";
		break;
		
	case 1:
		echo "aは１に等しい";
		break;
		
	default:
		echo "aは０でも１でもない";
}

echo "<br><br>";

#第７講

$name = array("田中","高橋","斎藤");

//$name[0] = "田中";
//$name[1] = "高橋";
//$name[2] = "斎藤"; これと同義。

echo $name[0];
echo "<br>";
echo $name[1];

echo "<br><br>";

$name[] = "佐藤";

echo $name[3];

echo $name[0] = "加藤";

unset($name[1]);

echo $name[1];

echo "<br><br>";


//第８講

$country = array ("アジア" => "日本",
							 	"アメリカ" => "アメリカ",
							 	"欧州" => "フランス"
							 );

echo $country["アジア"];

echo "<br><br>";

$big_country = array (
	array ("日本","タイ"),
	array ("アメリカ","ブラジル"),
	array ("フランス","ロシア")
);

echo $big_country[0][1];

//第９講

echo "<br><br>";

$name = "山田";
$age = 25;

echo $name."さん(".$age."歳)";

echo "<br><br>";

//第１０講

function totalPrice($fruitprice,$tax=1.08,$haiso=350) {
	return($fruitprice*$tax) + $haiso;
}

$mikan = totalprice(300);
echo $mikan."円<br>";
$ringo = totalprice(450);
echo $ringo."円<br>";
$ichigo = totalprice(550);
echo $ichigo."円<br>";
$nashi = totalprice(350);
echo $nashi."円<br>";

function shikaku ($tate, $yoko) {
	return $tate* $yoko;
}

echo"<br>";
echo shikaku(3,5);
echo"<br>";
echo shikaku(5,10);
echo"<br>";
echo shikaku(7,3);
echo"<br>";

//第１１講

for($i = 1; $i <= 100; $i++) {
	echo "$i";
	echo "-";
}

for($i = 1; $i <= 5; $i++) {
	echo "★";
}


?>