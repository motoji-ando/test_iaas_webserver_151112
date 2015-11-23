<head>
	<title>
	安藤家のさんすうドリル
	</title>
	<style type="text/css">
		body {background-color: #F0A0FF; margin-left: 50px}
		body {font-size: large}
	</style>
</head>
<body>
<!--
<form action="sample_math_exam_check.php" method="get">
-->
<?php
  $v1 = array(0,0,0,0,0,0,0,0,0,0);
  $v2 = array(0,0,0,0,0,0,0,0,0,0);
  $r  = array(0,0,0,0,0,0,0,0,0,0);
  $ox = array(0,0,0,0,0,0,0,0,0,0);
  $x_count = 0;
  $right = 0; 
  for ($i = 0; $i < 10; $i++) {
    $key = "v1-" . $i;
    $v1[$i] = $_GET[$key];
    $key = "v2-" . $i;
    $v2[$i] = $_GET[$key];
    $key = "ans" . $i;
    $answer = 0; 
    if (is_null($_GET[$key])) {
      $answer = 0; 
    } else {
      $answer = $_GET[$key];
    }
    $key = "r" . $i;
    $r[$i] = $_GET[$key];

    echo $v1[$i];
    switch ($_GET["operator"]) {
    case "add": echo " + "; break;
    case "sub": echo " - "; break;
    case "mul": echo " × "; break;
    case "div": echo " ÷ "; break;
    default:    echo "internal error.";
    }
    echo $v2[$i] . " = " . $answer;
    $ox[$i] = "x";
    if ($answer != $r[$i]) {
      echo "- - - - →  ×";
      $x_count++;
    } else {
      echo "- - - - →  ○";
      $ox[$i] = "o";
    }
    echo "<br>";
  }
  if ($x_count) {
    echo "<h1>10問中、" . $x_count . "問がまちがいでした。" . (10 - $x_count) * 10 . "点です。</h1>";
    echo "<h1>ざんねん！  つぎはがんばろう！</h1>";
  } else {
    echo "<h1>全問正解！　１００点満点！　やったね！！</h1>";
  }
?>
  <a href="sample_math_exam.php">もう一回やる</a>
</body>
