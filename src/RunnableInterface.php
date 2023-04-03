<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface RunnableInterface
{
    public function run(int $interval = 1000): int;
}
