<?php
namespace anthos\V1\Rest\Scientific_names;

class Scientific_namesResourceFactory
{
    public function __invoke($services)
    {
        return new Scientific_namesResource();
    }
}
