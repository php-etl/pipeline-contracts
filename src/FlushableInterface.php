<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

/**
 * @template Type
 */
interface FlushableInterface
{
    /** @return ResultBucketInterface<Type> */
    public function flush(): ResultBucketInterface;
}
