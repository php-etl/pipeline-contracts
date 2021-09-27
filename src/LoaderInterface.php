<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<mixed, Type, ResultBucketInterface<Type>, void>
     */
    public function load(): \Generator;
}
