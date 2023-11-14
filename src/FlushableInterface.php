<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

use Kiboko\Component\Bucket\EmptyResultBucket;
use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template Type of non-empty-array<array-key, mixed>|object
 */
interface FlushableInterface
{
    /** @return ResultBucketInterface<Type>|EmptyResultBucket */
    public function flush(): ResultBucketInterface;
}
