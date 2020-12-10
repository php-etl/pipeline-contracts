<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface PipelineInterface extends
    ExtractingInterface,
    TransformingInterface,
    LoadingInterface
{
    /**
     * @param array<mixed>|object ...$data
     */
    public function feed(array|object ...$data): void;
}
