<?php

$a = array("【A】" => "赤",
					 "【B】" => "青",
					 "【C】" => "緑");

foreach($a as $key => $value) {
	echo $key.$value;
}

echo "<br><br>";

$food = array(
	"vegetable" => array ("carrot" => "にんじん",
						 						"tomato" => "トマト",
						 						"onion" => "たまねぎ"
											),
	"fruit" => array ("apple" => "りんご",
										"orange" => "オレンジ",
									  "grape" => "ぶどう"
									 ));

foreach( $food as $groupkey => $namekey) {
	echo "■".$groupkey."<br>";
	foreach( $namekey as $eigoname => $nihonname) {
		echo $eigoname.":".$nihonname."<br>";
	}
	echo "<br>";
}

$b = array ("d","c","b","a");
	sort($b);
foreach($b as $key_b => $value_b) {
	echo $value_b."<br>";
}

?>


<?php

class FruitClass{

  public $fruit = 'Apple';

  //メソッドの宣言
  public function FruitMethod(){
    $fruit = 'Grape';

    echo $fruit;
    //Grapeが出力
    echo $this->fruit;
    //Appleが出力
  }
}

//インスタンスの生成
$class = new FruitClass();
//メソッドの呼出し
$class->FruitMethod();

?>


