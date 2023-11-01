<?php

namespace tests\Validate;

use PHPUnit\Framework\TestCase;

class Validate2Test extends TestCase 
{
    public function test_nao_validado()
    {
        $this->assertFalse(false);
    }
}