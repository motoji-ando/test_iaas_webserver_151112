<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
  <input type="text" name="val1" size="4" <?php if ($_POST) {echo "value=", $_POST['val1'];}?>>
  +
  <input type="text" name="val2" size="4" <?php if ($_POST) {echo "value=", $_POST['val2'];}?>>
  <input type="submit" value=" = ">
<?php
if ($_POST) {
	$num1 = $_POST['val1'];
	$num2 = $_POST['val2'];
	/* echo $num1, ' + ', $num2, ' = ', $num1 + $num2; */
	echo ' ', $num1 + $num2;
	echo '<br>すいかとはるかのアホ';
}
?>
</form>

