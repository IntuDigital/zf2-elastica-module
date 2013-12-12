<?php

namespace IntuElastica\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Elastica\Client;

/**
 * Elastica client factory
 *
 * @license MIT
 * @package IntuElastica
 */
class ElasticaFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Configuration');
        $client = new Client(isset($config['elastica']) ? $config['elastica'] : array());

        return $client;
    }
}
