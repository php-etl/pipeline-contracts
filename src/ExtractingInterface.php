<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface ExtractingInterface
{
    /**
     * @template OutputType of non-empty-array<array-key, mixed>|object
     *
     * @param ExtractorInterface<OutputType> $extractor
     */
    public function extract(
        StepCodeInterface $step,
        ExtractorInterface $extractor,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): self;
}
