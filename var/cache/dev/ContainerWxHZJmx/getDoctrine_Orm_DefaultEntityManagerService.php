<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

$a = new \Doctrine\Common\Cache\ArrayCache();
$a->setNamespace('sf_orm_default_bc93672a5c9552d72f4293b03ecd1dcf54094ff473c3a7252ccc16c7b03602ef');

$b = new \Doctrine\Common\Cache\ArrayCache();
$b->setNamespace('sf_orm_default_bc93672a5c9552d72f4293b03ecd1dcf54094ff473c3a7252ccc16c7b03602ef');

$c = new \Doctrine\Common\Cache\ArrayCache();
$c->setNamespace('sf_orm_default_bc93672a5c9552d72f4293b03ecd1dcf54094ff473c3a7252ccc16c7b03602ef');

$d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$d->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->load(__DIR__.'/getAnnotations_CachedReaderService.php')), array(0 => 'C:\\Pedidos_Symfony\\src\\Entity')), 'App\\Entity');

$e = new \Doctrine\ORM\Configuration();
$e->setEntityNamespaces(array('App' => 'App\\Entity'));
$e->setMetadataCacheImpl($a);
$e->setQueryCacheImpl($b);
$e->setResultCacheImpl($c);
$e->setMetadataDriverImpl($d);
$e->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$e->setProxyNamespace('Proxies');
$e->setAutoGenerateProxyClasses(true);
$e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$e->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$e->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$e->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['service_locator.v5YYcZp'] ?? $this->privates['service_locator.v5YYcZp'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array()))));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')), $e);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array()))->configure($instance);

return $instance;
