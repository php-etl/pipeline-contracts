<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface ExtractorInterface
{
    /**
     * Extract data from the given source.
     *
     * @return iterable<ResultBucketInterface<Type>>
     */
    public function extract(): iterable;
}
