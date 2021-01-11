<?php

namespace Kiboko\Contract\Pipeline;

interface RunnableInterface
{
    public function run(): int;
}
