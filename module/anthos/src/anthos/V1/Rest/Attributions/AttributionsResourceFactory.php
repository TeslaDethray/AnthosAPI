<?php
namespace anthos\V1\Rest\Attributions;

class AttributionsResourceFactory
{
    public function __invoke($services)
    {
        return new AttributionsResource();
    }
}
