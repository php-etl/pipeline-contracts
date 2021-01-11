<?php

namespace Kiboko\Contract\Pipeline;

interface LoaderInterface
{
    /**
     * Loads data in the given sink.
     *
     * @return \Generator<array|object>
     */
    public function load(): \Generator;
}
