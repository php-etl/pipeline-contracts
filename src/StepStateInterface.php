<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface StepStateInterface
{
    public function accept(int $count = 1): void;

    public function reject(int $count = 1): void;

    public function error(int $count = 1): void;
}
