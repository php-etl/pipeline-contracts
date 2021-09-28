<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/** @template Type */
interface TransformerInterface
{
    /**
     * Transforms the data from one format to another.
     *
     * @return \Generator<mixed, ResultBucketInterface<Type>|ResultBucketInterface<void>, null|Type, void>
     */
    public function transform(): \Generator;
}
