<?php

$i               = 1;
$line_number     = 1;
$numbers_in_line = 1;
while ($i < 100) {
  echo $i;
  if ($line_number === $numbers_in_line) {
    $numbers_in_line = 1;
    $line_number++;
    echo PHP_EOL;
  } else {
    echo ' ';
    $numbers_in_line++;
  }
  $i++;
}