<?php

namespace Kiboko\Contract\Pipeline;

interface WalkableInterface
{
    /** @return \Iterator<array|object> */
    public function walk(): \Iterator;
}
