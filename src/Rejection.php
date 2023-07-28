<?php

namespace Kiboko\Contract\Pipeline;

final class Rejection
{
    public function __construct(
        public array $item,
        public string $reason = '',
    ) {
    }
}
