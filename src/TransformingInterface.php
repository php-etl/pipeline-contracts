<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface TransformingInterface
{
    /**
     * @template Type
     *
     * @param TransformerInterface<Type> $transformer
     */
    public function transform(
        StepCodeInterface $step,
        TransformerInterface $transformer,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
