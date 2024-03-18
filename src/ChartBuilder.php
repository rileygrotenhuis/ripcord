<?php

namespace Rileygrotenhuis\Ripcord;

use Rileygrotenhuis\Ripcord\Charts\BarChart;
use Rileygrotenhuis\Ripcord\Charts\BubbleChart;
use Rileygrotenhuis\Ripcord\Charts\LineChart;
use Rileygrotenhuis\Ripcord\Charts\PieChart;
use Rileygrotenhuis\Ripcord\Charts\PolarAreaChart;
use Rileygrotenhuis\Ripcord\Charts\ScatterChart;

class ChartBuilder
{
    public static function barChart(
        array $labels,
        array $data
    ): BarChart {
        return new BarChart($labels, $data);
    }

    public static function lineChart(
        array $labels,
        array $data,
    ): LineChart {
        return new LineChart($labels, $data);
    }

    public static function pieChart(
        array $labels,
        array $data
    ): PieChart {
        return new PieChart($labels, $data);
    }

    public static function scatterChart(array $data): ScatterChart
    {
        return new ScatterChart($data);
    }

    public static function bubbleChart(array $data): BubbleChart
    {
        return new BubbleChart($data);
    }

    public static function polarAreaChart(
        array $labels,
        array $data
    ): PolarAreaChart {
        return new PolarAreaChart($labels, $data);
    }
}
