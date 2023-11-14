<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template InputType
 * @template OutputType
 */
interface TransformerInterface
{
    /**
     * Transforms the data from one format to another.
     *
     * @return \Generator<int, ResultBucketInterface<OutputType>, InputType|null, void>
     */
    public function transform(): \Generator;
}
