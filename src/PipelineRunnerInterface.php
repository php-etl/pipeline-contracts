<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\AcceptanceResultBucketInterface;
use Kiboko\Contract\Bucket\RejectionResultBucketInterface;
use Kiboko\Contract\Bucket\ResultBucketInterface;

interface PipelineRunnerInterface
{
    /**
     * @template Type
     *
     * @param \Iterator<int, Type|null> $source
     * @param \Generator<int, ResultBucketInterface<Type>&(AcceptanceResultBucketInterface<Type>|RejectionResultBucketInterface<Type>), Type|null, void> $async
     *
     * @return \Iterator<int, ResultBucketInterface<Type|null>>
     */
    public function run(
        \Iterator $source,
        \Generator $async,
        StepRejectionInterface $rejection,
        StepStateInterface $state,
    ): \Iterator;
}
