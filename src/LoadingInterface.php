<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface LoadingInterface
{
    public function load(LoaderInterface $loader): LoadingInterface;
}
