<?php

namespace Kiboko\Contract\Pipeline;

use Kiboko\Contract\ETL\Bucket\ResultBucketInterface;

interface FlushableInterface
{
    public function flush(): ResultBucketInterface;
}
