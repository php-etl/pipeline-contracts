<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface RejectionWithReasonInterface extends RejectionInterface
{
    public function rejectWithReason(object|array $rejection, string $reason, null|\Throwable $exception = null): void;
}
