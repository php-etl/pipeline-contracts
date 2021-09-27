<?php

namespace Kiboko\Contract\Pipeline;

interface ExtractingInterface
{
    /**
     * @template Type
     * @param ExtractorInterface<Type> $extractor
     */
    public function extract(
        ExtractorInterface $extractor,
        RejectionInterface $rejection,
        StateInterface $state,
    ): ExtractingInterface;
}
