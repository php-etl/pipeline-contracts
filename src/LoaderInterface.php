<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template InputType of non-empty-array<array-key, mixed>|object
 * @template OutputType of non-empty-array<array-key, mixed>|object
 */
interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<positive-int, ResultBucketInterface<OutputType>, InputType|null, void>
     */
    public function load(): \Generator;
}
