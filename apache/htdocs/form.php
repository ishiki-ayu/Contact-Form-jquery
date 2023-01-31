<?php
session_start();

//クリックジャッキングへの対策
header('X-Frame-Options: DENY');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <script src="/js/jquery-3.6.1.min.js"></script> <!-- jsファイル読み込み-->
	<link rel="stylesheet" href="form.css"/> <!-- jsファイル読み込み-->
	  <!-- jQueryの読み込み -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="form.js"></script>

    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
 	<form action="confirm.php" method="post" name="contact-form" id="contact-form">
 		<h2>お問い合わせフォーム</h2>
	 	<div class="input-area">
		 	<p>氏名</p>
		 	<input type="text" name="name" class="validate[maxSize[50]]" placeholder="山田　太郎" required>
		</div>

	 	<div class="input-area">
		 	<p>性別</p>
		 	<label><input type="radio" name="gender" value="男性" required>男性</label>
		 	<label><input type="radio" name="gender" value="女性">女性</label>
			<label><input type="radio" name="gender" value="無回答">無回答</label>
	 	</div>

         <div class="input-area">
		 	<p>生年月日</p>
		 	<input type="date" name="birth" placeholder="" required>
	 	</div>

         <div class="input-area">
		 	<p>郵便番号</p>
		 	<input type="text" name="post" class="validate[custom[number]]" placeholder="0101234" required>
	 	</div>

         <div class="input-area">
		 	<p>住所</p>
		 	<input type="text" name="address" class="validate[maxSize[200]]" placeholder="〇〇県〇〇市△△町1-1-1 〇〇コーポ101" required>
	 	</div>

         <div class="input-area">
		 	<p>電話番号</p>
		 	<input type="text" name="tell"  placeholder="09012345678">
	 	</div>

         <div class="input-area">
		 	<p>メールアドレス</p>
		 	<input type="email" name="email" class="validate[maxSize[200]]" placeholder="abc@sample.com">
	 	</div>

	 	<div class="input-area">
		 	<p>問い合わせ種類</p>
		 	<label><input type="checkbox" name="kind[]" value="ご質問" class="validate[minCheckbox[1]]">ご質問</label>
		 	<label><input type="checkbox" name="kind[]" value="ご意見ご要望" class="validate[minCheckbox[1]]">ご意見ご要望</label>
		 	<label><input type="checkbox" name="kind[]" value="資料請求" class="validate[minCheckbox[1]]">資料請求</label>
		 	<label><input type="checkbox" name="kind[]" value="ご依頼" class="validate[minCheckbox[1]]">ご依頼</label>
		 	<label><input type="checkbox" name="kind[]" value="その他" class="validate[minCheckbox[1]]">その他</label>
	 	</div>

		<div class="input-area">
	 		<p>相談内容</p>
	 		<textarea name="message" row=10 class="validate[maxSize[1000]]" placeholder="具体的な内容を記載" required></textarea>
		</div>
	 	<div class="input-area">
	 		<input type="submit" name="submit" value="確認画面へ" class="btn-border">
	 	</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="form.js"></script>
</body>