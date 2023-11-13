<?php

declare(strict_types=1);

namespace Kiboko\Contract\Pipeline;

interface WalkableInterface
{
    /** @return \Iterator<non-empty-array<array-key, mixed>|object> */
    public function walk(): \Iterator;
}
