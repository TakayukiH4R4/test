jQuery (function(){
	//ここにjQueryを書いていきます

	$(function(){
	//h1のタグを赤色に変える
		
		$("h1").css("color" , "red");
		
	});

	
	$(function(){
	//pタグをフェードアウトする
		
		$("p").fadeOut("slow");
		
	});

	$(function(){
	//h2タグをテキスト変更する
		
		$("h2").text("おやすみ");
		
	});

});


