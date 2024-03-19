<?php
  /* $a = $_GET["a"]; */
  /* $b = $_GET["b"]; */
  /* $c = $_GET["c"]; */
  // пункт 16
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];
  $d = $b * $b - 4 * $a * $c;
  echo 'D = '.$d.'<br>';
  if ($d > 0)
    echo 'D більше за нуль';
  else if ($d < 0)
    echo 'D менше за нуль';
  else
    echo 'D дорівнює нулю';
?>
