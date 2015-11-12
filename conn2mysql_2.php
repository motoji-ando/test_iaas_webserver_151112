<html>
<head><title> mySQL : PHP test </title></head>
<body>
<?php
	$link2db = mysql_connect('localhost', 'testuser1', 'testuser1');
	if (!$link2db) {
		die ('fatal error. mysql_connect() failure.' .mysql_error());
	}
	print ('<p>mysql_connect() done.</p>');

	$db_selected = mysql_select_db('tutor_20151101', $link2db);
	if (!$db_selected) {
		die ('fatal error. mysql_select_db() failure.' .mysql_error());
	}
	print ('<p>mysql_select_db() done.</p>');

	$result = mysql_query('SELECT student_id, name2nd, name1st FROM student_info');
	if (!$result) {
		die ('fatal error. mysql_query() failure.' .mysql_error());
	}
	print ('<p>mysql_query() done.</p>');

	while ($row = mysql_fetch_assoc($result)) {
		print ('<p>');
		print ('student_id=' . $row['student_id']);
		print ('name2nd=' . $row['name2nd']);
		print ('name1st=' . $row['name1st']);
		print ('<p/>');
	}

	$close_sts = mysql_close($link2db);

	if ($close_sts) {
		print ('<p>mysql_close() done.</p>');
	}
?>
</body>
</html>
