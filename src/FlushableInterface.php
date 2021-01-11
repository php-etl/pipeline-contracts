<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\Bucket\ResultBucketInterface;

interface FlushableInterface
{
    public function flush(): ResultBucketInterface;
}
