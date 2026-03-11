<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface TransformingInterface
{
    /**
     * @template InputType
     * @template OutputType
     *
     * @param TransformerInterface<InputType, OutputType> $transformer
     * @param StepRejectionInterface<array<string, mixed>|object> $rejection
     */
    public function transform(
        StepCodeInterface $step,
        TransformerInterface $transformer,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
