<?php

namespace Rileygrotenhuis\Ripcord\Charts;

use Rileygrotenhuis\Ripcord\Colors;

class LineChart extends Chart
{
    public function __construct(
        public array $labels,
        public array $data,
        public bool $fill = false
    ) {
    }

    public function build(): array
    {
        $datasets = array_map(function ($data, $index) {
            return [
                'label' => $data['label'],
                'data' => $data['data'],
                'fill' => $this->fill,
                'borderColor' => Colors::BORDER_COLORS[$index],
                'tension' => 0.4,
            ];
        }, $this->data);

        return [
            'labels' => $this->labels,
            'datasets' => $datasets,
        ];
    }

    public function validate(): bool
    {
        return $this->validateLabels() && $this->validateData();
    }

    protected function validateLabels(): bool
    {
        foreach ($this->labels as $label) {
            if (! is_string($label)) {
                return false;
            }
        }

        return true;
    }

    protected function validateData(): bool
    {
        foreach ($this->data as $chartData) {
            if (! is_string($chartData['label'])) {
                return false;
            }

            if (! is_array($chartData['data'])) {
                return false;
            }

            foreach ($chartData['data'] as $data) {
                if (! is_numeric($data)) {
                    return false;
                }
            }
        }

        return true;
    }
}
