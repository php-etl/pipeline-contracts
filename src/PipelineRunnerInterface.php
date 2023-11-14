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
     * @param StepRejectionInterface<InputType|null> $rejection
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
