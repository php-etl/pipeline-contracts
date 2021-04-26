<?php

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    public function load(
        LoaderInterface $loader,
        RejectionInterface $rejection,
        StateInterface $state,
    ): LoadingInterface;
}
