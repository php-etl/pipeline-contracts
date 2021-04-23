<?php declare(strict_types=1);

namespace Kiboko\Contract\ETL\Pipeline;

interface StatefulInterface
{
    public function increment(int $step = 1): void;
}
