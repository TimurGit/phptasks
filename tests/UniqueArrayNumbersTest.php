<?php

use PHPUnit\Framework\TestCase;
use phpTasks\UniqueArrayNumbers;


final class UniqueArrayNumbersTest extends TestCase
{
  public function testGenerateUniqueArr() {
    $arr = new UniqueArrayNumbers();

    $this->assertIsArray($arr->getArr());
    $unique_arr = [];
    foreach ($arr->getArr() as $rows) {
      foreach ($rows as $item) {
        $unique_arr[$item] = 1;
      }
    }
    $this->assertCount(UniqueArrayNumbers::ARR_COLUMNS*UniqueArrayNumbers::ARR_ROWS, $unique_arr);
  }
}

