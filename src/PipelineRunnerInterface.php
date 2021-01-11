<?php

namespace Kiboko\Contract\Pipeline;

interface PipelineRunnerInterface
{
    /**
     * @param \Iterator<array|object> $source
     * @param \Generator<array|object> $async
     * @return \Iterator<array|object>
     */
    public function run(\Iterator $source, \Generator $async): \Iterator;
}
