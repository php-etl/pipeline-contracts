<?php

namespace Kiboko\Contract\Pipeline;

interface ExecutingActionInterface
{
    public function execute(
        ActionInterface $action,
        RejectionInterface $rejection,
        StateInterface $state
    ): ExecutingActionInterface;
}
