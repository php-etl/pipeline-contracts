<?php

namespace Kiboko\Contract\Pipeline;

interface LoadingInterface
{
    public function load(
        LoaderInterface $loader,
        RejectionInterface $rejection,
        StatefulInterface $state,
    ): LoadingInterface;
}
