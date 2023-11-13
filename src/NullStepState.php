<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullStepState implements StepStateInterface
{
    public function accept(int $count = 1): void
    {
        // NOOP
    }

    public function reject(int $count = 1): void
    {
        // NOOP
    }

    public function error(int $count = 1): void
    {
        // NOOP
    }
}
