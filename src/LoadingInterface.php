<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    /**
     * @template Type
     *
     * @param LoaderInterface<Type> $loader
     */
    public function load(
        StepCodeInterface $step,
        LoaderInterface $loader,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
