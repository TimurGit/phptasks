<?php
namespace phpTasks;

class UniqueArrayNumbers
{
  public const ARR_COLUMNS = 5;
  public const ARR_ROWS    = 7;

  const ARR_FROM = 1;
  const ARR_TO   = 1000;

  private $_arr;

  public function __construct() {
    $unique_arr = [];
    $this->_arr = [];
    for ($i = 1; $i <= self::ARR_ROWS; $i++) {
      for ($j = 1; $j <= self::ARR_COLUMNS; $j++) {
        $unique_val = rand(self::ARR_FROM, self::ARR_TO);
        while (isset($unique_arr[$unique_val])) {
          $unique_val = rand(self::ARR_FROM, self::ARR_TO);
        }
        $unique_arr[$unique_val] = 1;
        $this->_arr[$i][$j]      = $unique_val;
      }
    }
    return $this;
  }

  public function getArr() {
    return $this->_arr;
  }

  public function printArr() {
    foreach ($this->_arr as $arr_rows) {
      foreach ($arr_rows as $arr_item) {
        echo $arr_item . ' ';
      }
      echo PHP_EOL;
    }
    return $this;
  }

  public function printSumArrRows() {
    foreach ($this->_arr as $i => $arr_rows) {
      echo "Sum row number $i = " . array_sum($arr_rows) . PHP_EOL;
    }
    return $this;
  }

  public function printSumArrColumns() {
    for ($j = 1; $j <= self::ARR_COLUMNS; $j++) {
      $sum = 0;
      for ($i = 1; $i <= self::ARR_ROWS; $i++) {
        $sum += $this->_arr[$i][$j];
      }
      echo "Sum column number $j = " . $sum . PHP_EOL;
    }
    return $this;
  }
}