<?php

namespace Rileygrotenhuis\Ripcord\Charts;

use Rileygrotenhuis\Ripcord\Colors;

class BubbleChart extends Chart
{
    public function __construct(
        public array $data
    ) {
    }

    public function build(): array
    {
        $datasets = array_map(function ($data, $index) {
            return [
                'label' => $data['label'],
                'data' => $data['data'],
                'backgroundColor' => Colors::BACKGROUND_COLORS[$index],
            ];
        }, $this->data);

        return [
            'datasets' => $datasets,
        ];
    }

    public function validate(): bool
    {
        foreach ($this->data as $chartData) {
            if (! is_string($chartData['label']) || ! is_array($chartData['data'])) {
                return false;
            }

            foreach ($chartData['data'] as $data) {
                if (! is_array($data) || ! array_key_exists('x', $data) || ! array_key_exists('y', $data) || ! array_key_exists('z', $data)) {
                    return false;
                }

                if (! is_numeric($data['x']) || ! is_numeric($data['y']) || ! is_numeric($data['z'])) {
                    return false;
                }
            }
        }

        return true;
    }
}
