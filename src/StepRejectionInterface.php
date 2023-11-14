<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

/**
 * @template Type
 */
interface StepRejectionInterface
{
    /** @param Type $rejection */
    public function reject(array|object $rejection, \Throwable $exception = null): void;

    /** @param Type $rejection */
    public function rejectWithReason(array|object $rejection, string $reason, \Throwable $exception = null): void;
}
