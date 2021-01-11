<?php

namespace Kiboko\Contract\Pipeline;

interface ExtractorInterface
{
    /**
     * Extract data from the given source.
     *
     * @return iterable<array|object>
     */
    public function extract(): iterable;
}
