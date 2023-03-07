<?php

namespace Kiboko\Contract\Pipeline;

interface ActionInterface
{
    public function execute(): iterable;
}
