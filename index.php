<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex,nofollow">
	<title>ひとつ石ホームページ</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
    <h1>
        <a href="index.html">空き家マッチングサービス</a>
    </h1>
		<nav class="pc-nav">
			<ul>
				<li><a href="index.html">ホーム</a></li>
				<li><a href="signup.php">ログイン</a></li>
			　	<li><a href="index2.html">空き家を見つける</a></li>
			　<li><a href="">空き家を売る</a></li>　
		</nav>
	</header>
	<div class="main-visual">
		 <span style="border-bottom: solid 5px white;"><h2></h2></span>
	</div>

	<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="personal_name"><br><br>
<textarea name="contents" rows="8" cols="40">
</textarea><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<?php

$personal_name = $_POST['personal_name'];
$contents = $_POST['contents'];

print('<p>投稿者:'.$personal_name.'</p>');
print('<p>内容:</p>');
print('<p>'.$contents.'</p>');

?>
</form>






</body>
</html>
