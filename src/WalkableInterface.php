<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface WalkableInterface
{
    /** @return \Iterator<array|object> */
    public function walk(): \Iterator;
}
