<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

final class NullState implements StateInterface
{
    public function initialize(int $start = 0): void
    {
        // NOOP
    }

    public function increment(int $step = 1): void
    {
        // NOOP
    }

    public function reject(int $step = 1): void
    {
        // NOOP
    }

    public function incrementFromBucket(ResultBucketInterface $bucket): void
    {
        // NOOP
    }
}
