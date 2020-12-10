<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface TransformingInterface
{
    public function transform(TransformerInterface $transformer): TransformingInterface;
}
