<?php

namespace Kiboko\Contract\Pipeline;

interface TransformingInterface
{
    /**
     * @template Type
     * @param TransformerInterface<Type> $transformer
     */
    public function transform(
        TransformerInterface $transformer,
        RejectionInterface $rejection,
        StateInterface $state,
    ): TransformingInterface;
}
