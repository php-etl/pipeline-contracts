<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface InitializableInterface
{
    public function initialize(): void;
}
