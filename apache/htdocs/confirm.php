<?php
//PHP8.1.12
//各項目を内容を取得
$name = $_POST['name'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$post = $_POST['post'];
$address = $_POST['address'];
$tell = $_POST['tell'];
$email = $_POST['email'];
$kind = $_POST['kind'];
$message = $_POST['message'];

//kindの内容をスラッシュ区切りで取り出す
if (isset($_POST['kind']) && is_array($_POST['kind'])) {
$kind = implode('/', $_POST['kind']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>

</head>
<body>
 	<form action="confirm.php" method="post">
 		<h2>お問い合わせ内容確認</h2>
	 	<div class="input-area">
		 	<p>氏名</p>
		 	<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
		</div>

        <div class="input-area">
		 	<p>性別</p>
		 	<?php echo $gender;?>
	 	</div>

        <div class="input-area">
		 	<p>生年月日</p>
		 	<?php echo $birth;?>
	 	</div>

        <div class="input-area">
		 	<p>郵便番号</p>
		 	<?php echo $post;?>
	 	</div>

        <div class="input-area">
		 	<p>住所</p>
		 	<?php echo $address;?>
	 	</div>

        <div class="input-area">
		 	<p>電話番号</p>
		 	<?php echo $tell;?>
	 	</div>

		<div class="input-area">
		 	<p>メールアドレス</p>
		 	<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
	 	</div>

	 	<div class="input-area">
		 	<p>お問い合わせ種類</p>
		 	<?php echo $kind;?>
	 	</div>

		<div class="input-area">
	 		<p>相談内容</p>
	 		<?php echo nl2br(htmlspecialchars($message,ENT_QUOTES,'UTF-8'));?>
		</div>
	 	<div class="input-area">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" name="submit" value="送信" class="btn-border">
	 		<input type="hidden" name="name" value="<?php echo $name;?>">
	 		<input type="hidden" name="gender" value="<?php echo $gender;?>">
			<input type="hidden" name="birth" value="<?php echo $birth;?>">
			<input type="hidden" name="post" value="<?php echo $post;?>">
			<input type="hidden" name="adress" value="<?php echo $adress;?>">
			<input type="hidden" name="tell" value="<?php echo $tell;?>">
			<input type="hidden" name="email" value="<?php echo $email;?>">
	 		<input type="hidden" name="kind" value="<?php echo $kind;?>">
	 		<input type="hidden" name="message" value="<?php echo $message;?>">
	 	</div>
	</form>
</body>
</html>

<style type="text/css">
	body {
		background-color: #f9fff2;
	}
	.input-area {
		margin-bottom: 20px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>