<?php

function multiply($a, $b) {
  return $a * $b;
}

class GetInfoTest extends \PHPUnit\Framework\TestCase {
  public function testDescriptionExample() {
    $this->assertEquals([2, 2, false, false, false, true], get_info('multiply'));
  }
}