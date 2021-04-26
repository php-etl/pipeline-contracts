<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullState implements StateInterface
{
    public function initialize(int $start = 0): void
    {
        // NOOP
    }

    public function increment(int $step = 1): void
    {
        // NOOP
    }
}
