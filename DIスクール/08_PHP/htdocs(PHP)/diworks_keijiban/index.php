<!DOCTYPE HTML>
 <html lang="ja">
 <head>
 <metacharset="UTF-8">
 <title>diworksblog掲示板</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	
	 <?php
	 
	 mb_internal_encoding("utf8");
	 $pdo = new PDO("mysql:dbname=lesson1; host=localhost;","root","");
	 
	 $stmt = $pdo -> query("select * from diworks_keijiban");

	 ?>
	
	<header>
	 <img class="logo" src="diblog_logo.jpg">
	
		<div class="header_menu">
			<ul>
				<li class="top">トップ</li>
				<li>プロフィール</li>
				<li>D.I.Blogについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li class="sonota">その他</li>
			</ul>
		</div>
	</header>
	
	<main>
		<div class="left">
			<h1>プログラミングに役立つ掲示板
			</h1>
	 
			<form method="post" action="insert.php">
			
			<h2>入力フォーム</h2>
				
			<div>
				<label>ハンドルネーム</label><br>
				<input type="text" required class="text" size="30" name="handlename"><br>
			</div>
				
			<div>
				<label>タイトル</label><br>
				<input type="text" required class="text" size="30" name="title">
			</div>
				
			<div>
				<label>コメント</label><br>
					<textarea required rows="7" cols="50" name="comments">
					</textarea>
			</div>
			
				<div>
				<input type="submit" class="submit" value="投稿する">
				</div>

			</form>
			
			<?php
			
			while($row = $stmt->fetch()) {
				
			echo" <div class='toukou'>";
			echo" <h3>".$row['title']."</h3>";
			echo" <div class='contents'>";
			echo  $row['comments'];
			echo"<div class='handlename'>
				posted by".$row['handlename']."</div>";
			
			echo"</div>";
			echo"</div>";
			}
				
			?>
			
		</div>
		
		
		<div class="right">
		
			<h4 class="right_midashi">人気の記事
			</h4>
			<ul class=right_list>
				<li>PHPオススメ本</li>
				<li>PHP MyAdminの使い方</li>
				<li>いま人気のエディタTop5</li>
				<li>HTMLの基礎</li>
			</ul>
			
			<h4 class="right_midashi">おすすめリンク
			</h4>
			<ul class=right_list>
				<li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
				<li>XAMPPのダウンロード</li>
				<li>Eclipseのタウンロード</li>
				<li>Bracketsのダウンロード</li>
			</ul>
			
			<h4 class="right_midashi">カテゴリ
			</h4>
			<ul class=right_list>
				<li>HTML</li>
				<li>PHP</li>
				<li>MySQL</li>
				<li>JavaScript</li>
			</ul>
			
		</div>
	 </main>
	 
	 <footer>
	 	<div>Copyright D.I.Works| D.I.blog is the one which provides A to Z about programming
		</div>
	 </footer>
	 
		
	 </body>
	 </html>