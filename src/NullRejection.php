<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullRejection implements RejectionInterface
{
    public function initialize(): void
    {
        // NOOP
    }

    public function reject(object|array $rejection, ?\Throwable $exception = null): void
    {
        // NOOP
    }

    public function teardown(): void
    {
        // NOOP
    }
}
