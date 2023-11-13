<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface RejectionInterface
{
    public function initialize(): void;

    /** @param non-empty-array<mixed>|object $rejection */
    public function reject(array|object $rejection, \Throwable $exception = null, string $reason = null): void;

    public function teardown(): void;
}
