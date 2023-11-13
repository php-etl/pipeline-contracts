<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface StepRejectionInterface
{
    /** @param non-empty-array<mixed>|object $rejection */
    public function reject(array|object $rejection, \Throwable $exception = null): void;

    public function rejectWithReason(array|object $rejection, string $reason, \Throwable $exception = null): void;
}
