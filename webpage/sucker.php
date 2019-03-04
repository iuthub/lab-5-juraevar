<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="buyagrade.css">
	<title>Sucker Information</title>
</head>
<body>
	<?php
		if($_REQUEST["name"] !== NULL && $_REQUEST["creditCard"] !== NULL && (isset($_POST['submit']) && !empty($_POST['selectSection'])) && !isset($_REQUEST["card"])){?>
				<h1>Sorry</h1>
				<p>You didn't fill out form completely. <a href="buyagrade.php">Try again?</a> </p>
			<?php }
		elseif(!preg_match("/^\d{16}$/", $_REQUEST["creditCard"])) {?>
			<h1> Sorry </h1>
            <span class="error">Credit Card number must be 16 digits.<a href="buyagrade.php">Try again?</a></span>
        <?php }
		else{
	?>
	<h1>Thanks, sucker!</h1>
	<p>Your information has been recorded</p>
	<dl>
		<dt>Name</dt>
		<dd><?= $_REQUEST["name"]; ?></dd>
		<dt>Section</dt>
		<dd><?= $_POST['selectSection']; ?></dd>
		<dt>Credit Card</dt>
		<dd><?= $_REQUEST["creditCard"] . " (" . $_REQUEST["card"] .")" ?></dd>
	</dl>
	<?php 
			$file_content =  $_REQUEST["name"] . ";" . $_POST['selectSection'] . ";" . $_REQUEST["creditCard"] . ";" . $_REQUEST["card"] .PHP_EOL;
			file_put_contents("sucker.txt", $file_content, FILE_APPEND);
	?>
	<dl>
		<p>Here are all the the suckers who have submitted here: </p>
		<?php
			$file = "sucker.txt";
			if (!file_exists($file)) {
				echo "Database is not exist";
			}
			else{
				$file_contents = file_get_contents("sucker.txt");?>
				<pre>
					<?= "\n" . $file_contents; ?>
				</pre>
			<?php 
			}
		?>
	</dl>
	<?php } ?>
</body>
</html>