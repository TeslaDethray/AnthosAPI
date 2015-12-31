<?php
namespace anthos\V1\Rest\Definitions;

class DefinitionsResourceFactory
{
    public function __invoke($services)
    {
        return new DefinitionsResource();
    }
}
