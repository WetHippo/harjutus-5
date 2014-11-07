<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjutus-5 andmetüübid (3)
	</title>
</head>
<body>
	<h2>Booleans</h2>
		<?php $result1 = True?>
		<?php $result2 = False?>
		<?php echo $result1?><br>
		<?php echo $result2?>
		<?php echo "Result 1: {$result1}"?><br>
		<?php echo "Result 2: {$result2}"?><br>
		<?php echo "Kas result 1 on boolean? " .  is_bool($result1)?><br>
		<?php echo "Kas result 2 on boolean? " .  is_bool($result2)?><br>
	<h2>Andmetüüpide olekud</h2>
		<h3>NULL</h3>
			<?php $var1=null?><br>
			<?php $var2=""?><br>
			<?php $var3=0?><br>
			<?php echo "Var1 on null? " .  is_null($var1)?><br>
			<?php echo "Var2 on null? " .  is_null($var2)?><br>
			<?php echo "Var3 on null? " .  is_null($var3)?><br>
			<?php echo "Var4 on null? " .  is_null($var4)?><br>
		<h3>Set</h3>
			<?php echo "Kas var1 on väärtustatud? " .  isset($var1)?><br>
			<?php echo "Kas var2 on väärtustatud? " .  isset($var2)?><br>
			<?php echo "Kas var3 on väärtustatud? " .  isset($var3)?><br>
			<?php echo "Kas var4 on väärtustatud? " .  isset($var4)?><br>	
		<h3>Empty</h3>
			<?php $var1=""?><br>
			<?php $var2="0"?><br>
			<?php $var3 = 0 ?><br>
			<?php $var4 = 0.0 ?><br>
			<?php $var5= array() ?><br>
			<?php $var6 = null?><br>
			<?php $var7 = $result2?><br>
			<?php echo "$var1 on empty?". empty($var1)?><br>
			<?php echo "$var2 on empty?". empty($var2)?><br>
			<?php echo "$var3 on empty?". empty($var3)?><br>
			<?php echo "$var4 on empty?". empty($var4)?><br>
			<?php echo "$var5 on empty?". empty($var5)?><br>
			<?php echo "$var6 on empty?". empty($var6)?><br>
			<?php echo "$var7 on empty?". empty($var7)?><br>		
	<h2>Andmetüübi teisendamine</h2>
		<?php $count=2?>
		<?php echo $count?>
		<?php echo gettype($count)?><br>
		<?php  settype($count, "string"); ?>
		<?php echo $count?>
		<?php echo gettype($count)?><br>
		<?php  settype($count, "float"); ?>
		<?php echo $count?>
		<?php echo gettype($count)?><br>
		<?php  settype($count, "array"); ?>
		<?php print_r (array($count))?><br>
		<?php  settype($count, "boolean"); ?>
		<?php echo $count?>	
	<h2>Konstandid</h2>
		<?php define("MAX_WIDTH", 980); ?>
		<?php echo MAX_WIDTH; ?>
		<?php define("MAX_WITDH", 500); ?>
		<?php echo MAX_WIDTH; ?>		
</body>
</html>