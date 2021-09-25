<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface RejectionInterface
{
    public function initialize(): void;
    public function reject(object|array $rejection, ?\Throwable $exception = null): void;
    public function teardown(): void;
}
