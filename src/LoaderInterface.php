<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<mixed, ResultBucketInterface<Type>|ResultBucketInterface<void>, null|Type, void>
     */
    public function load(): \Generator;
}
