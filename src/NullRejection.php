<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullRejection implements RejectionInterface
{
    public function initialize(): void
    {
        // NOOP
    }

    /** @param non-empty-array<array-key, mixed>|object $rejection */
    public function reject(StepCodeInterface $step, array|object $rejection, \Throwable $exception = null, string $reason = null): void
    {
        // NOOP
    }

    /** @param non-empty-array<array-key, mixed>|object $rejection */
    public function rejectWithReason(StepCodeInterface $step, array|object $rejection, string $reason, \Throwable $exception = null): void
    {
        // NOOP
    }

    public function teardown(): void
    {
        // NOOP
    }
}
