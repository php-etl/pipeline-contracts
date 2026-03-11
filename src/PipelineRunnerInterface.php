<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

interface PipelineRunnerInterface
{
    /**
     * @template InputType
     * @template OutputType
     *
     * @param \Iterator<int, InputType|null> $source
     * @param \Generator<mixed, mixed, mixed, iterable<ResultBucketInterface<OutputType>|null>> $async
     * @param StepRejectionInterface<array<string, mixed>|object> $rejection
     *
     * @return \Iterator<int, ResultBucketInterface<OutputType>|null>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): \Iterator;
}
