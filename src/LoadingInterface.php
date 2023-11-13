<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    /**
     * @template InputType
     * @template OutputType
     *
     * @param LoaderInterface<InputType, OutputType> $loader
     */
    public function load(
        StepCodeInterface $step,
        LoaderInterface $loader,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
