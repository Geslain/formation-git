<?php

include 'operator.php';

?>
<html>
<head></head>
<body>
	<p><?php $error ?></p>
	<form action="index.php">
		<input type="reset" value="C"></input>
		<input type="text" id="a" name="a"></input>
		<select id="op" name="op">
			<option value="add">+</option>
			<option value="sous">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		<input type="text" id="b" name="b"></input>
		<input type="submit" value="="></input>
	</form>
	<p><?=$result?></p>
</body>
</html>