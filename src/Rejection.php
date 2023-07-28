<?php

namespace Kiboko\Contract\Pipeline;

final class Rejection
{
    public function __construct(
        public string $reason = '',
        public array $item,
    ) {
    }
}
