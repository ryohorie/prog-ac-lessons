<?php
for ($a = 1; $a < 10; $a++) {
  $array = [];
  for ($b = 1; $b < 10; $b++) {
    array_push($array, $a*$b);
  }
  echo implode("\t", $array) . "\n";
}
