<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'anthos\\V1\\Rest\\Plants\\PlantsResource' => 'anthos\\V1\\Rest\\Plants\\PlantsResourceFactory',
            'anthos\\V1\\Rest\\Definitions\\DefinitionsResource' => 'anthos\\V1\\Rest\\Definitions\\DefinitionsResourceFactory',
            'anthos\\V1\\Rest\\Sources\\SourcesResource' => 'anthos\\V1\\Rest\\Sources\\SourcesResourceFactory',
            'anthos\\V1\\Rest\\Tags\\TagsResource' => 'anthos\\V1\\Rest\\Tags\\TagsResourceFactory',
            'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesResource' => 'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'anthos.rest.plants' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/plants[/:plants_id]',
                    'defaults' => array(
                        'controller' => 'anthos\\V1\\Rest\\Plants\\Controller',
                    ),
                ),
            ),
            'anthos.rest.definitions' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/definitions[/:definitions_id]',
                    'defaults' => array(
                        'controller' => 'anthos\\V1\\Rest\\Definitions\\Controller',
                    ),
                ),
            ),
            'anthos.rest.sources' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/sources[/:sources_id]',
                    'defaults' => array(
                        'controller' => 'anthos\\V1\\Rest\\Sources\\Controller',
                    ),
                ),
            ),
            'anthos.rest.tags' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/tags[/:tags_id]',
                    'defaults' => array(
                        'controller' => 'anthos\\V1\\Rest\\Tags\\Controller',
                    ),
                ),
            ),
            'anthos.rest.scientific_names' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/scientific_names[/:scientific_names_id]',
                    'defaults' => array(
                        'controller' => 'anthos\\V1\\Rest\\Scientific_names\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'anthos.rest.plants',
            1 => 'anthos.rest.definitions',
            2 => 'anthos.rest.sources',
            3 => 'anthos.rest.tags',
            4 => 'anthos.rest.scientific_names',
        ),
    ),
    'zf-rest' => array(
        'anthos\\V1\\Rest\\Plants\\Controller' => array(
            'listener' => 'anthos\\V1\\Rest\\Plants\\PlantsResource',
            'route_name' => 'anthos.rest.plants',
            'route_identifier_name' => 'plants_id',
            'collection_name' => 'plants',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'anthos\\V1\\Rest\\Plants\\PlantsEntity',
            'collection_class' => 'anthos\\V1\\Rest\\Plants\\PlantsCollection',
            'service_name' => 'plants',
        ),
        'anthos\\V1\\Rest\\Definitions\\Controller' => array(
            'listener' => 'anthos\\V1\\Rest\\Definitions\\DefinitionsResource',
            'route_name' => 'anthos.rest.definitions',
            'route_identifier_name' => 'definitions_id',
            'collection_name' => 'definitions',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'anthos\\V1\\Rest\\Definitions\\DefinitionsEntity',
            'collection_class' => 'anthos\\V1\\Rest\\Definitions\\DefinitionsCollection',
            'service_name' => 'definitions',
        ),
        'anthos\\V1\\Rest\\Sources\\Controller' => array(
            'listener' => 'anthos\\V1\\Rest\\Sources\\SourcesResource',
            'route_name' => 'anthos.rest.sources',
            'route_identifier_name' => 'sources_id',
            'collection_name' => 'sources',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'anthos\\V1\\Rest\\Sources\\SourcesEntity',
            'collection_class' => 'anthos\\V1\\Rest\\Sources\\SourcesCollection',
            'service_name' => 'sources',
        ),
        'anthos\\V1\\Rest\\Tags\\Controller' => array(
            'listener' => 'anthos\\V1\\Rest\\Tags\\TagsResource',
            'route_name' => 'anthos.rest.tags',
            'route_identifier_name' => 'tags_id',
            'collection_name' => 'tags',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'anthos\\V1\\Rest\\Tags\\TagsEntity',
            'collection_class' => 'anthos\\V1\\Rest\\Tags\\TagsCollection',
            'service_name' => 'tags',
        ),
        'anthos\\V1\\Rest\\Scientific_names\\Controller' => array(
            'listener' => 'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesResource',
            'route_name' => 'anthos.rest.scientific_names',
            'route_identifier_name' => 'scientific_names_id',
            'collection_name' => 'scientific_names',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesEntity',
            'collection_class' => 'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesCollection',
            'service_name' => 'scientific_names',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'anthos\\V1\\Rest\\Plants\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Definitions\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Sources\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Tags\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Scientific_names\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'anthos\\V1\\Rest\\Plants\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Definitions\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Sources\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Tags\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Scientific_names\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'anthos\\V1\\Rest\\Plants\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Definitions\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Sources\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Tags\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/json',
            ),
            'anthos\\V1\\Rest\\Scientific_names\\Controller' => array(
                0 => 'application/vnd.anthos.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'anthos\\V1\\Rest\\Plants\\PlantsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.plants',
                'route_identifier_name' => 'plants_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'anthos\\V1\\Rest\\Plants\\PlantsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.plants',
                'route_identifier_name' => 'plants_id',
                'is_collection' => true,
            ),
            'anthos\\V1\\Rest\\Definitions\\DefinitionsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.definitions',
                'route_identifier_name' => 'definitions_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'anthos\\V1\\Rest\\Definitions\\DefinitionsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.definitions',
                'route_identifier_name' => 'definitions_id',
                'is_collection' => true,
            ),
            'anthos\\V1\\Rest\\Sources\\SourcesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.sources',
                'route_identifier_name' => 'sources_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'anthos\\V1\\Rest\\Sources\\SourcesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.sources',
                'route_identifier_name' => 'sources_id',
                'is_collection' => true,
            ),
            'anthos\\V1\\Rest\\Tags\\TagsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.tags',
                'route_identifier_name' => 'tags_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'anthos\\V1\\Rest\\Tags\\TagsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.tags',
                'route_identifier_name' => 'tags_id',
                'is_collection' => true,
            ),
            'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.scientific_names',
                'route_identifier_name' => 'scientific_names_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'anthos\\V1\\Rest\\Scientific_names\\Scientific_namesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'anthos.rest.scientific_names',
                'route_identifier_name' => 'scientific_names_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'anthos\\V1\\Rest\\Plants\\Controller' => array(
            'input_filter' => 'anthos\\V1\\Rest\\Plants\\Validator',
        ),
        'anthos\\V1\\Rest\\Definitions\\Controller' => array(
            'input_filter' => 'anthos\\V1\\Rest\\Definitions\\Validator',
        ),
        'anthos\\V1\\Rest\\Sources\\Controller' => array(
            'input_filter' => 'anthos\\V1\\Rest\\Sources\\Validator',
        ),
        'anthos\\V1\\Rest\\Tags\\Controller' => array(
            'input_filter' => 'anthos\\V1\\Rest\\Tags\\Validator',
        ),
        'anthos\\V1\\Rest\\Scientific_names\\Controller' => array(
            'input_filter' => 'anthos\\V1\\Rest\\Scientific_names\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'anthos\\V1\\Rest\\Plants\\Validator' => array(
            0 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'common_name',
                'description' => 'Common name of the plant',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            1 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'color',
                'description' => 'Color varieties this plant manifests',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            2 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'type',
                'description' => 'Type of plant',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            3 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'variety',
                'description' => 'Specific plant variety',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            4 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'seasonality',
                'description' => 'Seasonality of the plant',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            5 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'vase_life',
                'description' => 'Average vase life time',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            6 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'difficulty',
                'description' => 'Difficulty in obtaining this plant',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            7 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'notes',
                'description' => 'Additional notes about the plant',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            8 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'image',
                'description' => 'Image of the plant',
                'continue_if_empty' => true,
                'allow_empty' => true,
                'type' => 'Zend\\InputFilter\\FileInput',
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'created_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
            10 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'updated_at',
                'description' => 'Timestamp indicating the time at which this record was last updated',
            ),
        ),
        'anthos\\V1\\Rest\\Definitions\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'definition',
                'description' => 'Definition',
            ),
            1 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'subdefinition',
                'description' => 'Drilling down from the main definition',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'created_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
            3 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => '',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'updated_at',
                'description' => 'Timestamp indicating the time at which this record was last updated',
            ),
        ),
        'anthos\\V1\\Rest\\Sources\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'title',
                'description' => 'Title of the source material',
            ),
            1 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'author',
                'description' => 'Author of the source',
            ),
            2 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'publication_date',
                'description' => 'Date of the source\'s publication',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            3 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'publisher',
                'description' => 'Name of the source\'s publisher',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            4 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'type',
                'description' => 'Source type',
            ),
            5 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'access_date',
                'description' => 'Date source was accessed (if internet)',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            6 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'created_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
            7 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'updated_at',
                'description' => 'Timestamp indicating the time at which this record was last updated',
            ),
        ),
        'anthos\\V1\\Rest\\Tags\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'tag',
                'description' => 'Title of the tag',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'created_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'updated_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
        ),
        'anthos\\V1\\Rest\\Scientific_names\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'kingdom',
                'description' => 'Kingdom',
            ),
            1 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'phylum',
                'description' => 'Phylum',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            2 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'class',
                'description' => 'Class',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            3 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'order',
                'description' => 'Order',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            4 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'family',
                'description' => 'family',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            5 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'genus',
                'description' => 'Genus',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            6 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'species',
                'description' => 'Species',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            7 => array(
                'required' => false,
                'validators' => array(),
                'filters' => array(),
                'name' => 'subspecies',
                'description' => 'Subspecies',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ),
            8 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => '',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'created_at',
                'description' => 'Timestamp indicating the time at which this record was created',
                'continue_if_empty' => false,
            ),
            9 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\DateTime',
                        'options' => array(
                            'breakchainonfailure' => true,
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'updated_at',
                'description' => 'Timestamp indicating the time at which this record was created',
            ),
        ),
    ),
);
