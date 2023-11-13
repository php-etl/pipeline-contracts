<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template InputType
 * @template OutputType
 */
interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<mixed, ResultBucketInterface<OutputType>|ResultBucketInterface<void>, InputType|null, void>
     */
    public function load(): \Generator;
}
