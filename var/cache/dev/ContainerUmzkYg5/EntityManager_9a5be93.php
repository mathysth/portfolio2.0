<?php

namespace ContainerUmzkYg5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b81b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraa247 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9690a = [
        
    ];

    public function getConnection()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getConnection', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getMetadataFactory', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getExpressionBuilder', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'beginTransaction', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getCache', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'transactional', array('func' => $func), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->transactional($func);
    }

    public function commit()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'commit', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->commit();
    }

    public function rollback()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'rollback', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'createQuery', array('dql' => $dql), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'createQueryBuilder', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'flush', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'clear', array('entityName' => $entityName), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->clear($entityName);
    }

    public function close()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'close', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->close();
    }

    public function persist($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'persist', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'remove', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'refresh', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'detach', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'merge', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'contains', array('entity' => $entity), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getEventManager', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getConfiguration', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'isOpen', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getUnitOfWork', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getProxyFactory', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'getFilters', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'isFiltersStateClean', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'hasFilters', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return $this->valueHolder3b81b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeraa247 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3b81b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b81b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b81b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__get', ['name' => $name], $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        if (isset(self::$publicProperties9690a[$name])) {
            return $this->valueHolder3b81b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b81b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b81b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__isset', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b81b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__unset', array('name' => $name), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b81b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b81b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__clone', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        $this->valueHolder3b81b = clone $this->valueHolder3b81b;
    }

    public function __sleep()
    {
        $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, '__sleep', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;

        return array('valueHolder3b81b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa247 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa247;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraa247 && ($this->initializeraa247->__invoke($valueHolder3b81b, $this, 'initializeProxy', array(), $this->initializeraa247) || 1) && $this->valueHolder3b81b = $valueHolder3b81b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b81b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b81b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
