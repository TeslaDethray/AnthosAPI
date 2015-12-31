<?php
namespace anthos\V1\Rest\Plants;

class PlantsResourceFactory
{
    public function __invoke($services)
    {
        return new PlantsResource();
    }
}
