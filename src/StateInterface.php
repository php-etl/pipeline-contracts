<?php declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

interface StateInterface
{
    public function initialize(int $start = 0): void;
    public function increment(int $step = 1): void;
    public function reject(int $step = 1): void;
    public function incrementFromBucket(ResultBucketInterface $bucket): void;
}
