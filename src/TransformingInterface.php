<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface TransformingInterface
{
    /**
     * @template InputType of non-empty-array<array-key, mixed>|object
     * @template OutputType of non-empty-array<array-key, mixed>|object
     *
     * @param TransformerInterface<InputType, OutputType> $transformer
     */
    public function transform(
        StepCodeInterface $step,
        TransformerInterface $transformer,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
