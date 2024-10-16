$(function(){
//画像を表示に乗せると画像が出てくる
	
	$(".hyouji").hover(
		function(){
			$(".pict_01").fadeIn();
		},
		function(){
			$(".pict_01").fadeOut();
		});
	
	$(".pict_02,.pict_03,.pict_04").hover(
		function(){
			$(this).animate({width:"220px"});
		},
		function(){
			$(this).animate({width:"200px"});
		});
	
});