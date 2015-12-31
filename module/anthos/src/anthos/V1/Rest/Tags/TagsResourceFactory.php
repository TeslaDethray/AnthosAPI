<?php
namespace anthos\V1\Rest\Tags;

class TagsResourceFactory
{
    public function __invoke($services)
    {
        return new TagsResource();
    }
}
