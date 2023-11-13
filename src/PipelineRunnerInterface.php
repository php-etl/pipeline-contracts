<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template Type
 */
interface PipelineRunnerInterface
{
    /**
     * @param \Iterator<int, array|object>                               $source
     * @param \Generator<mixed, Type, ResultBucketInterface<Type>, void> $async
     *
     * @return \Iterator<array|object>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): \Iterator;
}
