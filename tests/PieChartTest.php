<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\PieChart;

class PieChartTest extends TestCase
{
    public function testValidPieChart(): void
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

        $chart = new PieChart($labels, $data);

        $this->assertTrue($chart->validate());
    }

    public function testInvalidPieChart(): void
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

        $chart = new PieChart($labels, $data);

        $this->assertFalse($chart->validate());
    }
}
