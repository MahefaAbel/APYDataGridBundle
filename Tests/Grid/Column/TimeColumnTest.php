<?php

namespace Mahefa\APY\DataGridBundle\Tests\Grid\Column;

use Mahefa\APY\DataGridBundle\Grid\Column\TimeColumn;
use PHPUnit\Framework\TestCase;

class TimeColumnTest extends TestCase
{
    public function testGetType()
    {
        $column = new TimeColumn();

        $this->assertEquals('time', $column->getType());
    }
}
