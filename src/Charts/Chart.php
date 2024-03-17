<?php

namespace Rileygrotenhuis\Ripcord\Charts;

abstract class Chart
{
    abstract public function build(): array;

    abstract public function validate(): bool;
}
