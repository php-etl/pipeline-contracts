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
     * @param \Generator<int, ResultBucketInterface<InputType>, InputType|null, void> $coroutine
     * @param StepRejectionInterface<InputType> $rejection
     * @param StepStateInterface $state
     * @return \Iterator<int, ResultBucketInterface<OutputType>|null>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): \Iterator;
}
