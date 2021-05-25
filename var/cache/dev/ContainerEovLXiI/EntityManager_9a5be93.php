<?php

namespace ContainerEovLXiI;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2513b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f54d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67430 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getConnection', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getMetadataFactory', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getExpressionBuilder', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'beginTransaction', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getCache', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'transactional', array('func' => $func), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->transactional($func);
    }

    public function commit()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'commit', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->commit();
    }

    public function rollback()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'rollback', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'createQuery', array('dql' => $dql), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'createQueryBuilder', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'flush', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'clear', array('entityName' => $entityName), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'close', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->close();
    }

    public function persist($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'persist', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'remove', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'refresh', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'detach', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'merge', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'contains', array('entity' => $entity), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getEventManager', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getConfiguration', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'isOpen', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getUnitOfWork', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getProxyFactory', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'getFilters', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'isFiltersStateClean', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'hasFilters', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return $this->valueHolder2513b->hasFilters();
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

        $instance->initializer8f54d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2513b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2513b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2513b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__get', ['name' => $name], $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        if (isset(self::$publicProperties67430[$name])) {
            return $this->valueHolder2513b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2513b;

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

        $targetObject = $this->valueHolder2513b;
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
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2513b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2513b;
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
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__isset', array('name' => $name), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2513b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2513b;
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
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__unset', array('name' => $name), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2513b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2513b;
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
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__clone', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        $this->valueHolder2513b = clone $this->valueHolder2513b;
    }

    public function __sleep()
    {
        $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, '__sleep', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;

        return array('valueHolder2513b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f54d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f54d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f54d && ($this->initializer8f54d->__invoke($valueHolder2513b, $this, 'initializeProxy', array(), $this->initializer8f54d) || 1) && $this->valueHolder2513b = $valueHolder2513b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2513b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2513b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
