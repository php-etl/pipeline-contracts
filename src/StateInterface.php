<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface StateInterface
{
    public function initialize(int $start = 0): void;

    public function accept(StepCodeInterface $step, int $count = 1): void;

    public function reject(StepCodeInterface $step, int $count = 1): void;

    public function error(StepCodeInterface $step, int $count = 1): void;

    public function teardown(): void;
}
