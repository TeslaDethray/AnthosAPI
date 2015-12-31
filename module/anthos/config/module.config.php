<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'anthos\\V1\\Rest\\Plants\\PlantsResource' => 'anthos\\V1\\Rest\\Plants\\PlantsResourceFactory',
            'anthos\\V1\\Rest\\Definitions\\DefinitionsResource' => 'anthos\\V1\\Rest\\Definitions\\DefinitionsResourceFactory',
            'anthos\\V1\\Rest\\Sources\\SourcesResource' => 'anthos\\V1\\Rest\\Sources\\SourcesResourceFactory',
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
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'anthos.rest.plants',
            1 => 'anthos.rest.definitions',
            2 => 'anthos.rest.sources',
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
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'anthos\\V1\\Rest\\Plants\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Definitions\\Controller' => 'HalJson',
            'anthos\\V1\\Rest\\Sources\\Controller' => 'HalJson',
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
    ),
);
