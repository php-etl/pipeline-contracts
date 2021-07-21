<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template T
 */
interface FlushableInterface
{
    public function flush(): ResultBucketInterface;
}
