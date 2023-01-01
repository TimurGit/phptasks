<?php

function stairs_numbers(){
  $result = '';
  $i               = 1;
  $line_number     = 1;
  $numbers_in_line = 1;
  while ($i < 100) {
    $result .= $i;
    if ($line_number === $numbers_in_line) {
      $numbers_in_line = 1;
      $line_number++;
      $result .= PHP_EOL;
    } else {
      $result .= ' ';
      $numbers_in_line++;
    }
    $i++;
  }
  $result = substr($result,0,-1);
  return $result;
}