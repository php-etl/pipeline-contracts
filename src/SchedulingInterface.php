<?php

namespace Kiboko\Contract\Pipeline;

interface SchedulingInterface
{
    public function job(RunnableInterface $job): self;
}
