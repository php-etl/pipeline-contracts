<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface StateInterface
{
    public function initialize(int $start = 0): void;
    public function increment(int $step = 1): void;
}
