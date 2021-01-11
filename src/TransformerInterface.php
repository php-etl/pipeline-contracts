<?php

namespace Kiboko\Contract\Pipeline;

interface TransformerInterface
{
    /**
     * Transforms the data from one format to another.
     *
     * @return \Generator<array|object>
     */
    public function transform(): \Generator;
}
