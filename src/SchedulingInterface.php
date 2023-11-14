<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Satellite\RunnableInterface;

interface SchedulingInterface
{
    public function job(JobCodeInterface $job, RunnableInterface $runnable): self;
}
