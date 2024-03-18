<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\PolarAreaChart;

class PolarAreaChartTest extends TestCase
{
    public function testValidPolarAreaChart(): void
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

        $chart = new PolarAreaChart($labels, $data);

        $this->assertTrue($chart->validate());
    }

    public function testInvalidPolarAreaChart(): void
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

        $chart = new PolarAreaChart($labels, $data);

        $this->assertFalse($chart->validate());
    }
}
