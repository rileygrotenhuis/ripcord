<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\BarChart;

class BarChartTest extends TestCase
{
    public function testValidBarChart(): void
    {
        $labels = ['A', 'B', 'C'];

        $data = [
            [
                'label' => 'Test #1',
                'data' => [1, 2, 3],
            ],
            [
                'label' => 'Test #2',
                'data' => [4, 5, 6],
            ],
        ];

        $chart = new BarChart($labels, $data);

        $this->assertTrue($chart->validate());
    }

    public function testInvalidBarChart(): void
    {
        $labels = ['A', 'B', 'C'];

        $data = [
            [
                'label' => 'Test #1',
                'data' => [1, 2, 3],
            ],
            [
                'label' => 'Test #2',
                'data' => [4, 'invalid'],
            ],
        ];

        $chart = new BarChart($labels, $data);

        $this->assertFalse($chart->validate());
    }
}
