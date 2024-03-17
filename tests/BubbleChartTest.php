<?php

use PHPUnit\Framework\TestCase;
use Rileygrotenhuis\Ripcord\Charts\BubbleChart;

class BubbleChartTest extends TestCase
{
    public function testValidScatterChart(): void
    {
        $data = [
            [
                'label' => 'Test #1',
                'data' => [
                    ['x' => 1, 'y' => 2, 'z' => 3],
                    ['x' => 3, 'y' => 4, 'z' => 1],
                    ['x' => 5, 'y' => 6, 'z' => 3],
                ],
            ],
            [
                'label' => 'Test #2',
                'data' => [
                    ['x' => 7, 'y' => 8, 'z' => 1],
                    ['x' => 9, 'y' => 10, 'z' => 4],
                ],
            ],
        ];

        $chart = new BubbleChart($data);

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

        $chart = new BubbleChart($data);

        $this->assertFalse($chart->validate());
    }
}
