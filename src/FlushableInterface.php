<?php

namespace Kiboko\Contract\ETL\Pipeline;

use Kiboko\Contract\ETL\Bucket\ResultBucketInterface;

interface FlushableInterface
{
    public function flush(): ResultBucketInterface;
}
