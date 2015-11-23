<head>
	<title>
	安藤家のさんすうドリル
	</title>
	<style type="text/css">
		body {background-color: #A0A0FF; margin-left: 50px}
		body {font-size: large; font-weight: bold}
	</style>
</head>
<body>
<form action="sample_math_exam_check.php" method="get">
<!--
<form action="var_dump_get.php" method="get">
-->
<?php
  $v1  = array(0,0,0,0,0,0,0,0,0,0);
  $v2  = array(0,0,0,0,0,0,0,0,0,0);
  $r   = array(0,0,0,0,0,0,0,0,0,0);
  $ope = array('add','sub','mul','div');
  $ope_idx = mt_rand(0,3);

  for ($i = 0; $i < 10; $i++) {
    $v1[$i] = mt_rand(1,9);
    $v2[$i] = mt_rand(1,9);
    switch ($ope_idx) {
    case 0:
      echo $v1[$i] . " + " . $v2[$i] . " = ";
      $r[$i] = $v1[$i] + $v2[$i];
      break;
    case 1:
      if ($v1[$i] < $v2[$i]) {
        $v1copy = $v1[$i];
        $v1[$i] = $v2[$i];
        $v2[$i] = $v1copy;
      }
      echo $v1[$i] . " - " . $v2[$i] . " = ";
      $r[$i] = $v1[$i] - $v2[$i];
      break;
    case 2:
      echo $v1[$i] . " × " . $v2[$i] . " = ";
      $r[$i] = $v1[$i] * $v2[$i];
      break;
    case 3:
      if ($v1[$i] < $v2[$i]) {
        $v1copy = $v1[$i];
        $v1[$i] = $v2[$i];
        $v2[$i] = $v1copy;
      }
      //if ($v1[$i] % $v2[$i]) {
      //  $v1[$i] = $v1[i] - ($v1[$i] % $v2[$i]);
      //}
      echo $v1[$i] . " ÷ " . $v2[$i] . " = ";
      //$r[$i] = $v1[$i] / $v2[$i];
      $r[$i] = floor($v1[$i] / $v2[$i]);
      break;
    default:
      echo "internal error.";
    }
    $valuen= "val" . $i;
    echo "<input type=\"text\" name=\"ans$i\" pattern=\"[0-9]\" size=\"3\">";
    echo "<br>";
  }
  echo "<input type=\"hidden\" name=\"operator\" value=\"" . $ope[$ope_idx] . "\">";
  echo "<input type=\"hidden\" name=\"num\" value=\"10\">";
  for ($i = 0; $i < 10; $i++) {
    echo "<input type=\"hidden\" name=\"v1-$i\" value=\"" . $v1[$i] . "\"" . ">";
    echo "<input type=\"hidden\" name=\"v2-$i\" value=\"" . $v2[$i] . "\"" . ">";
    echo "<input type=\"hidden\" name=\"r$i\"   value=\"" . $r[$i]  . "\"" . ">";
  }
?>
  <input type="submit" value="おわったらおしてね">
</body>
<!--
  <input type="submit" value="apply">
</form>
-->
