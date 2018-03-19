<?php

include 'operator.php';

?>
<html>
<head></head>
<body>
	<p><?=$error?></p>
	<form action="index.php">
		<input type="reset" value="C"></input>
		<input type="text" id="a" name="a"></input>
		<select id="op" name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" id="b" name="b"></input>
		<input type="submit" value="="></input>
	</form>
	<p><?=$result?></p>
</body>
</html>