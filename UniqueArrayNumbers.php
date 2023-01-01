<?php

const ARR_COLUMNS = 5;
const ARR_ROWS    = 7;

const ARR_FROM = 1;
const ARR_TO   = 1000;

function generateArr() {
  $unique_arr = [];
  $result     = [];
  for ($i = 1; $i <= ARR_ROWS; $i++) {
    for ($j = 1; $j <= ARR_COLUMNS; $j++) {
      $unique_val = rand(ARR_FROM, ARR_TO);
      while (isset($unique_arr[$unique_val])) {
        $unique_val = rand(ARR_FROM, ARR_TO);
      }
      $unique_arr[$unique_val] = 1;
      $result[$i][$j]          = $unique_val;
    }
  }
  return $result;
}

function printArr($arr) {
  foreach ($arr as $arr_rows) {
    foreach ($arr_rows as $arr_item) {
      echo $arr_item . ' ';
    }
    echo PHP_EOL;
  }
}

function printSumArrRows($arr) {
  foreach ($arr as $i => $arr_rows) {
    echo "Sum row number $i = " . array_sum($arr_rows) . PHP_EOL;
  }
}

function printSumArrColumns($arr) {
  for ($j = 1; $j <= ARR_COLUMNS; $j++) {
    $sum = 0;
    for ($i = 1; $i <= ARR_ROWS; $i++) {
      $sum += $arr[$i][$j];
    }
    echo "Sum column number $j = " . $sum . PHP_EOL;
  }
}

$arr = generateArr();
printArr($arr);
printSumArrRows($arr);
printSumArrColumns($arr);