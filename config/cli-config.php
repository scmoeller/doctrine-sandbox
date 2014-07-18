<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;

include __DIR__ . "/../vendor/autoload.php";

$paths = array(
    __DIR__ . "/../config/doctrine" => "doctrinesbox\Model"
);

$isDevMode = true;

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'dbname'   => 'doctrinesbox',
    'user'     => 'moeller',
    'password' => 'qx7DhjCB',
);

$config        = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
$config->setMetadataDriverImpl(new SimplifiedYamlDriver($paths));

$entityManager = EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);
