<!DOCUTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>for文でプルダウンメニューを作る</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    
		<form>
			<select name="age">
			<option>選択してください</option>
				<script>
				for (var i = 18; i <= 65; i++) {
					document.write("<option>");
					document.write(i);
					document.write("</option>");
				}
				</script>
			</select>			
		</form>
    
    <script type="text/javascript" src="script.js"></script>
    </body>
</html>

                                                                                                                                                                                                                                                                           