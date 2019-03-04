<?php
    $isPost=$_SERVER["REQUEST_METHOD"]=="POST";
    $isValid=TRUE;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buy Your Way to a Better Education!</title>
  <link href="buyagrade.css" type="text/css" rel="stylesheet" />
  <style>
  	.warning{
  		color: red;
  	}
  </style>
</head>
<body>
  <h1>Buy Your Way to a Better Education!</h1>
  <p>The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
  </p>	
  <hr />		
  <h2>Give Us Your Money</h2>
  <form action="sucker.php" method="post">
	<dl>
  	  <dt>Name: </dt>
	  <dd>
        <input type="text" name="name" value="<?= isset($_REQUEST["name"])?$_REQUEST["name"]:"" ?>">
      </dd>
	  <dt>Section: </dt>
	  <dd>
		<select name="selectSection">
			<option selected hidden> Section </option>
			<option value="MA">MA</option>
			<option value="MH">MH</option>
		</select>
	  </dd>
  	  <dt>Credit Card: </dt>
	  <dd>
		<input type="text" maxlength="16" name="creditCard" value="<?= isset($_REQUEST["creditCard"])?$_REQUEST["creditCard"]:"" ?>">
	  </dd>

	  <dd>
	    <label>
	    	<input type="radio" name="card" value="<?= isset($_REQUEST["card"])?$_REQUEST["card"]:"Visa" ?>" />Visa</label>
	    <label><input type="radio" name="card" value="<?= isset($_REQUEST["card"])?$_REQUEST["card"]:"Master card" ?>" />Master Card</label>	
	  </dd>
	</dl>	
	<div class="button_block">
		<input type="submit" name="submit" value="I am a giant sucker" />
	</div>
	
  </form>
</body>
</html>