<html>
<head><title> mySQL : PHP test </title></head>
<body>
<?php
	$link2db = mysql_connect('localhost', 'testuser1', 'testuser1');
	if (!$link2db) {
		die ('fatal error. mysql_connect() failure.' .mysql_error());
	}
	print ('<p>mysql_connect() done.</p>');
	$close_sts = mysql_close($link2db);

	if ($close_sts) {
		print ('<p>mysql_close() done.</p>');
	}
?>
</body>
</html>
