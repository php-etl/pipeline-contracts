<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface RejectionInterface
{
    public function initialize(): void;

    /** @param non-empty-array<mixed>|object $rejection */
    public function reject(StepCodeInterface $step, array|object $rejection, \Throwable $exception = null): void;
    public function rejectWithReason(StepCodeInterface $step, object|array $rejection, string $reason, null|\Throwable $exception = null): void;

    public function teardown(): void;
}
