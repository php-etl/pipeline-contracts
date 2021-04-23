<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullState implements StatefulInterface
{
    public function increment(int $step = 1): void
    {
        // NOOP
    }
}
