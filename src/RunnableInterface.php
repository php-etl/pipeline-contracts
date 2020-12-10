<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface RunnableInterface
{
    public function run(): int;
}
