<?php

namespace ContainerGhbHz4c;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13d20 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera704e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties452da = [
        
    ];

    public function getConnection()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getConnection', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getMetadataFactory', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getExpressionBuilder', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'beginTransaction', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getCache', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getCache();
    }

    public function transactional($func)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'transactional', array('func' => $func), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->transactional($func);
    }

    public function commit()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'commit', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->commit();
    }

    public function rollback()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'rollback', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getClassMetadata', array('className' => $className), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'createQuery', array('dql' => $dql), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'createNamedQuery', array('name' => $name), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'createQueryBuilder', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'flush', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'clear', array('entityName' => $entityName), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->clear($entityName);
    }

    public function close()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'close', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->close();
    }

    public function persist($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'persist', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'remove', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'refresh', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'detach', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'merge', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getRepository', array('entityName' => $entityName), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'contains', array('entity' => $entity), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getEventManager', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getConfiguration', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'isOpen', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getUnitOfWork', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getProxyFactory', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'initializeObject', array('obj' => $obj), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'getFilters', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'isFiltersStateClean', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'hasFilters', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return $this->valueHolder13d20->hasFilters();
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

        $instance->initializera704e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13d20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13d20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13d20->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__get', ['name' => $name], $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        if (isset(self::$publicProperties452da[$name])) {
            return $this->valueHolder13d20->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13d20;

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

        $targetObject = $this->valueHolder13d20;
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
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13d20;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13d20;
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
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__isset', array('name' => $name), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13d20;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder13d20;
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
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__unset', array('name' => $name), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13d20;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder13d20;
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
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__clone', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        $this->valueHolder13d20 = clone $this->valueHolder13d20;
    }

    public function __sleep()
    {
        $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, '__sleep', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;

        return array('valueHolder13d20');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera704e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera704e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera704e && ($this->initializera704e->__invoke($valueHolder13d20, $this, 'initializeProxy', array(), $this->initializera704e) || 1) && $this->valueHolder13d20 = $valueHolder13d20;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13d20;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13d20;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
