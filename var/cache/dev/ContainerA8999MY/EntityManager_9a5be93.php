<?php

namespace ContainerA8999MY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49691 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere6cee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties06a4d = [
        
    ];

    public function getConnection()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getConnection', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getMetadataFactory', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getExpressionBuilder', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'beginTransaction', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getCache', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getCache();
    }

    public function transactional($func)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'transactional', array('func' => $func), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->transactional($func);
    }

    public function commit()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'commit', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->commit();
    }

    public function rollback()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'rollback', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getClassMetadata', array('className' => $className), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'createQuery', array('dql' => $dql), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'createNamedQuery', array('name' => $name), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'createQueryBuilder', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'flush', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'clear', array('entityName' => $entityName), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->clear($entityName);
    }

    public function close()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'close', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->close();
    }

    public function persist($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'persist', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'remove', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'refresh', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'detach', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'merge', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getRepository', array('entityName' => $entityName), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'contains', array('entity' => $entity), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getEventManager', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getConfiguration', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'isOpen', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getUnitOfWork', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getProxyFactory', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'initializeObject', array('obj' => $obj), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'getFilters', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'isFiltersStateClean', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'hasFilters', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return $this->valueHolder49691->hasFilters();
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

        $instance->initializere6cee = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49691) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49691 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49691->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__get', ['name' => $name], $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        if (isset(self::$publicProperties06a4d[$name])) {
            return $this->valueHolder49691->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49691;

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

        $targetObject = $this->valueHolder49691;
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
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49691;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49691;
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
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__isset', array('name' => $name), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49691;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49691;
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
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__unset', array('name' => $name), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49691;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49691;
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
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__clone', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        $this->valueHolder49691 = clone $this->valueHolder49691;
    }

    public function __sleep()
    {
        $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, '__sleep', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;

        return array('valueHolder49691');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere6cee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere6cee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere6cee && ($this->initializere6cee->__invoke($valueHolder49691, $this, 'initializeProxy', array(), $this->initializere6cee) || 1) && $this->valueHolder49691 = $valueHolder49691;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49691;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49691;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
