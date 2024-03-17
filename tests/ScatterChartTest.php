<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\ScatterChart;

class ScatterChartTest extends TestCase
{
    public function testValidScatterChart(): void
    {
        $data = [
            [
                'label' => 'Test #1',
                'data' => [
                    ['x' => 1, 'y' => 2],
                    ['x' => 3, 'y' => 4],
                    ['x' => 5, 'y' => 6],
                ],
            ],
            [
                'label' => 'Test #2',
                'data' => [
                    ['x' => 7, 'y' => 8],
                    ['x' => 9, 'y' => 10],
                ],
            ],
        ];

        $chart = new ScatterChart($data);

        $this->assertTrue($chart->validate());
    }

    public function testInvalidScatterChart(): void
    {
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

        $chart = new ScatterChart($data);

        $this->assertFalse($chart->validate());
    }
}
