<?php

namespace Kiboko\Contract\Pipeline;

interface ForkingInterface
{
    public function fork(callable... $builders): ForkingInterface;
}
