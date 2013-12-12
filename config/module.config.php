<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'Elastica\Client' => 'IntuElastica\Service\ElasticaFactory'
        ),
        'aliases' => array(
            'elastica' => 'Elastica\Client'
        )
    ),
    'elastica' => array(
        'servers' => array(
            array('host' => 'localhost', 'port' => 9200),
        ),
    )
);
