<?php

namespace Kiboko\Contract\Pipeline;

interface TransformingInterface
{
    public function transform(
        TransformerInterface $transformer,
        RejectionInterface $rejection,
        StateInterface $state,
    ): TransformingInterface;
}
