<?php

namespace Kiboko\Contract\Pipeline;

interface ExtractingInterface
{
    public function extract(
        ExtractorInterface $extractor,
        RejectionInterface $rejection,
        StatefulInterface $state,
    ): ExtractingInterface;
}
