<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    /**
     * @template InputType of non-empty-array<array-key, mixed>|object
     * @template OutputType of non-empty-array<array-key, mixed>|object
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
