<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

interface PipelineRunnerInterface
{
    /**
     * @template InputType of non-empty-array<array-key, mixed>|object
     * @template OutputType of non-empty-array<array-key, mixed>|object
     *
     * @param \Iterator<positive-int, InputType|null> $source
     * @param \Generator<int, ResultBucketInterface<InputType>, InputType|null, void> $coroutine
     * @param StepRejectionInterface<InputType> $rejection
     * @param StepStateInterface $state
     * @return \Iterator<positive-int, ResultBucketInterface<OutputType>|null>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): \Iterator;
}
