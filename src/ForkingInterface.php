<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface ForkingInterface
{
    public function fork(callable... $builders): ForkingInterface;
}
