<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template OutputType */
interface ExtractorInterface
{
    /**
     * Extract data from the given source.
     *
     * @return iterable<int, ResultBucketInterface<OutputType>>
     */
    public function extract(): iterable;
}
