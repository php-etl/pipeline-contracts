<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

final class NullRejection implements RejectionInterface
{
    public function reject(object|array $rejection, ?\Throwable $exception = null): void
    {
        // NOOP
    }
}
