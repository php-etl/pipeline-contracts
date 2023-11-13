<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullStepRejection implements StepRejectionInterface
{
    public function reject(array|object $rejection, \Throwable $exception = null): void
    {
        // NOOP
    }

    public function rejectWithReason(array|object $rejection, string $reason, \Throwable $exception = null): void
    {
        // NOOP
    }
}
