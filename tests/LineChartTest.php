<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\LineChart;

class LineChartTest extends TestCase
{
    public function testValidLineChart(): void
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

        $chart = new LineChart($labels, $data);

        $this->assertTrue($chart->validate());
    }

    public function testInvalidLineChart(): void
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

        $chart = new LineChart($labels, $data);

        $this->assertFalse($chart->validate());
    }
}
