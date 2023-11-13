<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface ExtractingInterface
{
    /**
     * @template OutputType
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
