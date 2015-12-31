<?php
namespace anthos\V1\Rest\Sources;

class SourcesResourceFactory
{
    public function __invoke($services)
    {
        return new SourcesResource();
    }
}
