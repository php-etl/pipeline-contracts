<?php

namespace Kiboko\Contract\ETL\Pipeline;

interface ExtractingInterface
{
    public function extract(ExtractorInterface $extractor): ExtractingInterface;
}
