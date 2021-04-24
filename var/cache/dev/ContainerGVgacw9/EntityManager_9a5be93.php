<?php

namespace ContainerGVgacw9;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ef7c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43262 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4bff = [
        
    ];

    public function getConnection()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getConnection', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getMetadataFactory', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getExpressionBuilder', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'beginTransaction', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getCache', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'transactional', array('func' => $func), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->transactional($func);
    }

    public function commit()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'commit', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->commit();
    }

    public function rollback()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'rollback', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getClassMetadata', array('className' => $className), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'createQuery', array('dql' => $dql), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'createNamedQuery', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'createQueryBuilder', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'flush', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'clear', array('entityName' => $entityName), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->clear($entityName);
    }

    public function close()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'close', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->close();
    }

    public function persist($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'persist', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'remove', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'refresh', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'detach', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'merge', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'contains', array('entity' => $entity), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getEventManager', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getConfiguration', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'isOpen', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getUnitOfWork', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getProxyFactory', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'initializeObject', array('obj' => $obj), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'getFilters', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'isFiltersStateClean', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'hasFilters', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return $this->valueHolder9ef7c->hasFilters();
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

        $instance->initializer43262 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ef7c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ef7c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ef7c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__get', ['name' => $name], $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        if (isset(self::$publicPropertiesf4bff[$name])) {
            return $this->valueHolder9ef7c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

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

        $targetObject = $this->valueHolder9ef7c;
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
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ef7c;
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
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__isset', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ef7c;
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
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__unset', array('name' => $name), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ef7c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ef7c;
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
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__clone', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        $this->valueHolder9ef7c = clone $this->valueHolder9ef7c;
    }

    public function __sleep()
    {
        $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, '__sleep', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;

        return array('valueHolder9ef7c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43262 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43262;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43262 && ($this->initializer43262->__invoke($valueHolder9ef7c, $this, 'initializeProxy', array(), $this->initializer43262) || 1) && $this->valueHolder9ef7c = $valueHolder9ef7c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ef7c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ef7c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
