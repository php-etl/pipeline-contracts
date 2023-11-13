<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullRejection implements RejectionInterface
{
    public function initialize(): void
    {
        // NOOP
    }

    /** @param non-empty-array<mixed>|object $rejection */
    public function reject(array|object $rejection, \Throwable $exception = null, string $reason = null): void
    {
        // NOOP
    }

    public function teardown(): void
    {
        // NOOP
    }
}
